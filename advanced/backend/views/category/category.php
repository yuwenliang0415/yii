 <?php
use yii\helpers\Url;
?>
 <center>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>分类名称</td>
			<td>操作</td>
		</tr>
		<?php foreach ($cate as $k=> $v){ ?>
		<tr>
			<td><?=$v['cat_id']?></td>
			<td><?=$v['cat_name']?></td>
			<td><a href="<?=Url::toRoute(['category/delcate','cat_id'=>$v['cat_id']])?>">删除</a>|<a href="">修改</a></td>
		</tr>
		<?php } ?>
	</table>
</center> 


				