<?php 
use Illuminate\Pagination\Paginator;
 ?>
<center>
	<h2>发表评论</h2>
	<form action="pl" method="post">
		<table>
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<tr>
				<td>评论:</td>
				<td><textarea name="content"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="发表"></td>
			</tr>
		</table>
	</form>

	<table border="1">
		<tr>
			<td>id</td>
			<td>评论人</td>
			<td>内容</td>
			<td>操作</td>
		</tr>
		@foreach($msg as $v)
		<tr>
			<td>{{$v->id}}</td>
			<td>{{$v->u_id}}</td>
			<td>{{$v->content}}</td>
			<td><a href="del?id={{$v->id}}">删除</a>|<a href="up?id={{$v->id}}"">修改</a></td>
		</tr>
		@endforeach
	</table>
	
	{{$msg->links()}}
</center>