@extends('layout')
@section('head')
<title>注册</title>
<style type="text/css">
	#regdiv{
		width: 80%;
		height: 40%;
		position: absolute;
		left: 10%;
		top: 20%;
	}
</style>
@stop

@section('body')
<div class="container" id="regdiv">
	<form class="form" action="/user/registPre" method="post">
		<div class="form-group">
			<input type="email" class="form-control" name="account" placeholder="请输入您的常用邮箱">
		</div>
		<div class="form-group">
			<input type="submit" class="form-control" value="注册">
		</div>
	</form>
</div>
@if(Input::has('msg') && $msg == 'success')
<script type="text/javascript">
	alert('注册链接已经发到您邮箱，请去邮箱激活账号');
</script>
@endif
@stop