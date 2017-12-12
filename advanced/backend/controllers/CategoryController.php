<?php 
namespace backend\controllers;
use yii;
use yii\web\Controller;
use app\models\Category;

class CategoryController extends Controller{
	public $enableCsrfValidation = false;
	public 	function actionAddcate(){
		if(yii::$app->request->post()){
			//接收表单值
			$data=yii::$app->request->post();
			//实例化模型
			$model=new category();
			$model->cat_name=$data['cat_name'];
			$model->save();
		}else{
			return $this->render("addcate");
		}
		
	}

	public function actionCategory(){

		$model=new category();
	    $data=$model->find()->asArray()->all();
	    return $this->render("category",['cate'=>$data]);
	}

	public function actionDelcate(){
		$cat_id=yii::$app->request->get();
		$model=new category();
		$res=$model->deleteAll('cat_id='.$cat_id);
		if($res){
			return $this->redirect("category/category");
		}
	}
}
 ?>