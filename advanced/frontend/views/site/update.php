<?php 
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\bootstrap\ActiveForm;
 ?>	
<?php $form=ActiveForm::begin(['action'=>'?r=index/addmsg'],'post');?>
<?= $form->field($model, 'content')->textarea()?>
<?= Html::submitButton('发表评论', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<?php ActiveForm::end(); ?>

