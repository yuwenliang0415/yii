<?php 
namespace backend\controllers;
use yii;
use yii\web\Controller;

use app\models\Admin;

class LoginController extends Controller{
	public $enableCsrfValidation = false;
	public function actionLogin(){
			if(Yii::$app->request->post()){
				$data=Yii::$app->request->post();
		
				$model=new Admin();
			
				$admin=$model->find()->where(["admin_name"=>$data['admin_name'],"admin_pwd"=>$data['admin_pwd']])->asArray()->one();
				
				if(empty($admin)){
					echo "账号密码错误";
				}else{
					$session=\Yii::$app->session;
        			$session->set("admin_id",$admin['admin_id']);
        			$session->set('admin_name',$admin['admin_name']);
					$this->redirect(["index/index"]);
					
				}
			}else{
				$this->layout=false;
				return $this->render("login");
			}
	}

	public function actionRegister(){
		if(Yii::$app->request->post()){
			$data=Yii::$app->request->post();
			$model=new Admin();
			foreach ($data as $k => $v) {
				$model->$k=$v;
			}
			$res=$model->save();
			$id = $model->attributes['admin_id'];

			if($res){
					$session=\Yii::$app->session;
        			$session->set("admin_id",$id);
        			$session->set('admin_name',$data['admin_name']);
					$this->redirect(["index/index"]);
			}

		}else{
				$this->layout=false;
			return $this->render('register');
		}
	}

}
 ?>