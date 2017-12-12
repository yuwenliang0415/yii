<?php
use yii\helpers\Url;
?>
<center>
	<form method="post"  action="<?=Url::to(['category/addcate'])?>">
		<table>
			<tr>
				<td>分类名称</td>
				<td><input type="text" name="cat_name"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="添加"></td>
			</tr>
		</table>
	</form>
</center>
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="">
	$(function(){
		alert('1111');
	})
</script> -->