<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use DfaFilter\SensitiveHelper;
use yii\widgets\LinkPager;
$wordData = array(
    '哈哈',
);
?>
<center>
<!-- <form method="" action="post">
	<table>
		<tr>
			<td>发表评论:</td>
			<td><textarea></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="发表"></td>
		</tr>
	</table>
</form> -->
<?php $form=ActiveForm::begin(['action'=>'?r=index/addmsg'],'post');?>
<?= $form->field($model, 'content')->textarea()?>
<?= Html::submitButton('发表评论', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<?php ActiveForm::end(); ?>

<br>
<table border="2">
	<tr>
		<td>id</td>
		<td>评论人</td>
		<td>评论内容</td>
		<td>操作</td>
	</tr>
	<?php foreach ($list as $k => $v) { ?>
		<tr>
			<td><?= $v['msg_id']?></td>
			<td><?= $v['u_name']?></td>
			<td><?= SensitiveHelper::init()->setTree($wordData)->replace($v['content'], '***');?></td>
			<td> <a href="<?=Url::toRoute(['index/delete','id'=>$v['msg_id']])?>">删除</a>
|<a href="<?=Url::toRoute(['index/update','id'=>$v['msg_id']])?>">修改</a></td>
		</tr>
	<?php } ?>
</table>
<?php echo LinkPager::widget([
    'pagination' => $pages,
]);
 ?>
</center>
