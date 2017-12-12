<?php 
namespace  backend\controllers;
use yii;
use yii\web\Controller;
class IndexController extends Controller{

		public function actionIndex(){
			return $this->render('index');
		}
	}
 ?>