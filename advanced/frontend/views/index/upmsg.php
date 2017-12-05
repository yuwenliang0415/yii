<?php 	
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;	
 ?>
<center>
<!-- <form method="post" action="<?=Url::to(['index/a'])?>">	
		<table>	
				<tr>
					<td>修改评论:</td>
					<td><textarea><?=$msg['content']?></textarea></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="修改"></td>
				</tr>
		</table>
</form> -->
<?php $form=ActiveForm::begin(['action'=>'?r=index/a']);?>
<?= Html::tag('textarea', Html::encode($msg['content']),['class'=>'content']) ?>
<br
<?= Html::input('hidden', 'msg_id', $msg['msg_id']) ?>
<?= Html::submitButton('修改评论', ['class' => 'submit']) ?>
<?php ActiveForm::end(); ?>

</center>