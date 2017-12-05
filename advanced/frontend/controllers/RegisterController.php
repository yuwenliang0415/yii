<?php 
namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use app\models\Regmsg;
use app\models\Usermsg;

class RegisterController extends Controller{
	 public $enableCsrfValidation = false;

	 public function actionShowone(){
	 	if(Yii::$app->request->post()){
	 		$data=Yii::$app->request->post();
	 		unset($data['r_pwd']);	

	 		$model = new Regmsg;

	 		$model->phone=$data['phone'];
	 		$model->pwd=$data['pwd'];
	 		$res=$model->save();
	 		
	 		if($res){
	 			return $this->redirect("?r=register/showtwo");
	 		}else{
	 			echo "添加失败";
	 		}
	 	}else{
	 		return $this->render('register');
	 	}
		 	
	 }

	 public function actionShowtwo(){
	 	if(Yii::$app->request->post()){
	 		$data=Yii::$app->request->post();

	 		$model = new Usermsg;
	 		$model->u_name=$data['u_name'];
	 		$model->u_sr=$data['u_sr'];
	 		$model->u_dz=$data['u_dz'];
	 		$res=$model->save();
	 		if($res){
	 			return $this->redirect("?r=register/showtree");
	 		}else{
	 			echo "添加失败";
	 		}
	 	}else{
	 		
	 		return $this->render('register_2');
	 	}
	 }

	 public function actionShowtree(){
	 	if(Yii::$app->request->post()){

	 	}else{
	 		return $this->render('register_3');
	 	}
	 }

 }


 ?>