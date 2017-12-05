<?php 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<?php $form=ActiveForm::begin(['action'=>'?r=index/login'],'post');?>
<?= $form->field($model, 'u_name') ?>
<?= $form->field($model,'u_pwd')?>
<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<?php ActiveForm::end(); ?>

