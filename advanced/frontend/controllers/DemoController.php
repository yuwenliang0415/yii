<?php 
namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use app\models\Field;

class DemoController extends Controller{
	public $enableCsrfValidation = false;
	public function actionAdd(){
	   if(Yii::$app->request->post()){
	   	   	$data=Yii::$app->request->post();
		   	$yz=$data['xz_min'].'~'.$data['xz_max'];
		   	$model = new Field();
		   
		    if($data['id']){
		   	  $model=$model->findOne(['id'=>$data['id']]);
		   
	   		}
	   		foreach ($data as $k => $v) {
	   				$model->$k=$v;
	   		}
		    $model->xz=$yz;
	   		$res=$model->save();
	   		
	   
	    if($res){
	    	$this->redirect(["demo/show"]);
	    }

	   }else{
	   		return $this->render('add');
	   }
	}

	public function actionShow(){
		$model = new Field();
		$data=$model->find()->asArray()->all();
		return $this->render("index",['field'=>$data]);
	}

	public function actionDel(){
		$model = new Field();
		$id=Yii::$app->request->get('id');
		$res=$model->deleteAll('id='.$id);
		 if($res){
	    	$this->redirect(["demo/show"]);
	    }
	}
	public function actionUp(){
	  $model = new Field();
	  $id=Yii::$app->request->get('id');
	  $data=$model->find()->where("id=".$id)->asArray()->one();
	
	  $arr=explode('~',$data['xz']);
      return $this->render("up",['field'=>$data,'xz'=>$arr]);
	}
}
 ?>
