<?php 	
use yii\helpers\Url;	
 ?>
<center>
<form method="post" action="<?=Url::to(['index/upmsg'])?>">	
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
</form>
</center>