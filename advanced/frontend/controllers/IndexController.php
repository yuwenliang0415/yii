<?php 
namespace frontend\controllers;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\Users;
use app\models\Msg;
use app\helpers\Url;
use \yii\data\Pagination;

	class IndexController extends Controller{
		public $enableCsrfValidation = false;
		
		public function actionLogin(){
			if(Yii::$app->request->post()){
				$data=Yii::$app->request->post();
				
				
			    $command = \Yii::$app->db;
			
        		$users= $command->createCommand('select * from users where u_name="'.$data['Users']['u_name'].'" and u_pwd="'.$data['Users']['u_pwd'].'"')->queryone();
        	
        		if(empty($users)){
        			echo "用户名或密码不存在";
        		}else{
        			$session=\Yii::$app->session;
        			$session->set("u_id",$users['u_id']);
        			$session->set('u_name',$users['u_name']);
        			return $this->redirect("http://www.yuwenliang.com/advanced/frontend/web/index.php?r=index/show");
        		}
			}else{
				$model=new Users();
				return $this->render('login',['model'=>$model]);
			}
		
		}

		public function actionShow(){
	
			$model=new Msg();
	    
            $pages = new Pagination([ 'defaultPageSize' => 3,'totalCount' => $model->find()->count()]);

            $list = $model->find()
            ->offset($pages->offset)
            ->limit($pages->limit)
            ->asArray()
            ->all();
       
			return $this->render("show",['list'=>$list,'pages'=>$pages,'model'=>$model]);
		}
		//添加
		public function actionAddmsg(){
			$model=new Msg();
			$model->load(Yii::$app->request->post());
			$content=$model->content;	
			$session=\Yii::$app->session;
			$u_id=$session->get("u_id");
			$model->u_name=$u_id;
			$res=$model->save();
			if($res){
				return $this->redirect(['index/show']);
			}
		}

		//删除
		public function actionDelete(){
		
			$msg_id=Yii::$app->request->get('id');
		
			$model=new Msg();
			$res=$model->deleteAll("msg_id=".$msg_id);
			if($res){
				return $this->redirect(['index/show']);
			}
		}

		//修改
		public function actionUpdate(){
			$msg_id=Yii::$app->request->get('id');
			$model=new Msg();
			$msg=$model->find()->where("msg_id=".$msg_id)->asArray()->one();
			return $this->render("upmsg",['msg'=>$msg,'model'=>$model]);
		}

		public function actionA(){
		
			$data=Yii::$app->request->post();
			print_r($data);die;
			/*$content=Yii::$app->request->get('content');*/
		}
	}
 ?>