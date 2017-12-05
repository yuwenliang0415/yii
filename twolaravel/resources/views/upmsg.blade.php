<center>
	<h2>修改评论</h2>
	<form action="upmsg" method="post">
		<table>
			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<input type="hidden" name="id" value="{{$msg->id}}">
			<tr>
				<td>评论:</td>
				<td><textarea name="content">{{$msg->content}}</textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="发表"></td>
			</tr>
		</table>
	</form>
</center>