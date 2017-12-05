<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class IndexController extends Controller{
	
		public function login(){

			return view("login");
		}

		public function login_do(Request $request){
			$u_name=$request->input("u_name");
			$u_pwd=$request->input("u_pwd");
			$u_name = DB::table('users')->where("u_name",$u_name)->get()->toArray();
		
			if(empty($u_name)){
				echo "用户名不存在";
			}else{
				$u_pwd=DB::table('users')->where("u_pwd",$u_name[0]->u_pwd)->get();
				if(empty($u_pwd)){
					echo "密码错误";
				}else{
					return redirect("pl");
				}
			}
		}

		public function show(Request $request){
			if($request->isMethod('post')){
				$data=$request->all();

				$res=DB::table('msg')->insert(['u_id'=>1,"content"=>$data['content']]);
				if($res){
					return redirect("pl");
				}

			}else{
				//$msg= DB::table('msg')->get();
				$msg= DB::table('msg')->simplePaginate(3);

			
				return view("show",['msg'=>$msg]);
			}
			
		}

		public function del(Request $request){
			$id=$request->get('id');
			$res= DB::table('msg')->where('id',$id)->delete();
			if($res){
				return redirect("pl");
			}
		}

		public function up(Request $request){
			 $id=$request->get('id');
			 $data=DB::table('msg')->where('id',$id)->first();
			 //print_r($data);die;
			 return view("upmsg",['msg'=>$data]);
		}
		public function upmsg(Request $request){
			$data=$request->all();
			$res=DB::table('msg')->where('id',$data['id'])->update(['content'=>$data['content']]);
			if($res){
				return redirect("pl");
			}
		}
	}
 ?>