<!DOCTYPE html>
<html lang="zh-CN">
<head>
<title>填写注册信息</title>
<link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css">
<style type="text/css">
	.box{
		width: 50%;
		height: 50%;
		position: absolute;
		top: 20%;
		left: 25%;
		border: 5px solid #f60;
		padding: 20px;
	}
	.error{
		color: red;
	}
</style>
</head>
<body>
<div class="box">
	<form class="form" action="register" method="post">
		<div class="form-group">
			<input type="hidden" class="form-control" name="account" value="{{$account}}">
		</div>
		<div class="form-group">
			<input type="text" class="form-control" name="username" placeholder="用户名" required>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="password" placeholder="密码" required>
			<div class="text error len">密码至少为6位</div>
		</div>
		<div class="form-group">
			<input type="password" class="form-control" name="confirmpassword" placeholder="确认密码" required>
			<div class="text error com">两次密码不一致</div>
		</div>
		<div class="form-group">
			<input type="submit" class="form-control" value="注册">
		</div>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		// alert('文档加载完毕');
		$('.error').hide();
		$("input[name='password']").blur(function(){
			if($(this).val().length < 6){
				$(".error.len").show();
			}else{
				// alert($(this).val().length);
				$(".error.len").hide();
			}
		});
		$("input[name='confirmpassword']").blur(function(){
			if($(this).val() != $("input[name='password']").val()){
				$(".error.com").show();
			}else{
				// alert($(this).val()+" :: "+$("input[name='password']").val());
				$(".error.com").hide();
			}
		});
	});
</script>
</body>
</html>