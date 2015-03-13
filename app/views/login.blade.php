<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>登陆</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style type="text/css">
	.content{
		width: 80%;
		height: 40%;
		margin: 0 auto;
		position: absolute;
		top: 14%;
		left: 10%;
		border: 2px #f60 solid;
		padding: 40px;
	}
	</style>
</head>
<body>
	<div class="content">
	<form class="form"action="/user/login" method="post">
		<div class="form-group">
			<input type="text" class="form-control" name="account" placeholder="邮箱" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="密码" required>
		</div>
		<div class="form-group">
			<input type="checkbox" name="remember">
			<span>下次自动登录</span>
		</div>
		<div class="form-group">
			<input type="submit" class="form-control btn btn-primary" value="登陆">
		</div>
		<div class="form-group">
			<a href="">忘记密码</a>
		</div>
	</form>
</div>
</body>
</html>