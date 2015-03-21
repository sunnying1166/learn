<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<title>登陆</title>
	<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/supersized.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
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
	<script src="js/jquery-1.8.2.min.js"></script>
   <script type="text/javascript" src="js/jquery.form.js"></script>
   <script type="text/javascript" src="js/tooltips.js"></script>
   <script type="text/javascript" src="js/login.js"></script>
</head>


<body>
<div class="page-container">
	<div class="main_box">
		<div class="login_box">
			<div class="login_logo">
				<img src="images/logo.png" >
			</div>
		
			<div class="login_form">
				<form class="form"action="/user/login" method="post">
					<div class="form-group">
						<label for="j_username" class="t">邮　箱：</label> 
						<input id="email" value="" name="account" type="text" class="form-control x319 in" 
						autocomplete="off" required>
					</div>
					<div class="form-group">
						<label for="j_password" class="t">密　码：</label> 
						<input id="password" value="" name="password" type="password" 
						class="password form-control x319 in" required>
					</div>
					
					<div class="form-group">
						<label class="t"></label>
						<label for="j_remember" class="m">
						<input id="j_remember" type="checkbox" name="remember" value="true">&nbsp;下次自动登陆!</label>
					</div>
					<div class="form-group space">
						<label class="t"></label>　　　
						<button type="submit"  id="submit_btn" 
						class="btn btn-primary btn-lg">&nbsp;登&nbsp;录&nbsp </button>
						<input type="reset" value="&nbsp;重&nbsp;置&nbsp;" class="btn btn-default btn-lg">
					</div>
					<div class="form-group">
			          <a href="">忘记密码</a>
		           </div>
				</form>
			</div>
		</div>
		<div class="bottom">Copyright &copy; 2015 - 2016 <a href="#">系统登陆</a></div>
	</div>
</div>

<!-- Javascript -->

<script src="js/supersized.3.2.7.min.js"></script>
<script src="js/supersized-init.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>

