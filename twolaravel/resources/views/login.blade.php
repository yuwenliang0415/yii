<center>
	<h3>登录页面</h3>
 <form method="post" action="logindo">
	<table>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<tr>
			
			<td>用户名</td>
			<td><input type="text" name="u_name"></td>
		</tr>
		<tr>
			<td>密码</td>
			<td><input type="password" name="u_pwd"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="登录"></td>
		</tr>
	</table>
 </form>
</center>