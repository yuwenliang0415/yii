<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\RedirectResponse;

class DayController extends Controller{
	public function addmsg(Request $request){
		if($request->isMethod("post")){
			
			$data=$request->all();
			$data['user_id']=1;
		
			DB::table("rc")->insert(['user_id'=>$data['user_id'],'content'=>$data['content'],'add_time'=>$data['add_time']]);
			$redis=Redis::connection();
			$rc=serialize($data);
			$rds=$redis->lpush('rc',$rc);
			if($rds){
				return redirect("rc");
			}
		}else{
			return view("addrc");
		}
	}

}
 ?>
