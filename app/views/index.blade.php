@extends('layout')
@section('head')
	@parent
	<title>首页</title>
@stop	
	@include("header")
	@include("top")

	@section('body')
	<div class="main">

		<div class="units-row content">
			<div class="main-left unit-20">
				<!-- ----------------------------------------------未登录状态 -->
				@if(!Auth::check())
				<div class="log">
				<p><img src="images/小八哥学汉字图标.png"></p>
					<p>你好，您尚未<a href="/user/login">登陆</a> , 还没账号？<a href="/user/register">点此</a>注册</p>
				</div>
				@endif
				<!-- ----------------------------------------------未登录状态 -->

				<!-- ----------------------------------------------登录状态 -->
				@if(Auth::check())
				<div class="infobox">
					<div class="head-big">
						<img src="images/hp14.jpg">
						<p>{{Auth::user()->nickname}}</p>
					
					<a href="/user/logout">点此注销</a>
					</div>
				</div>
				@endif
				<h5>您选择的教材版本</h5>
				<ul>
					<li><a href="#">课程1...</a></li>
				</ul>
				<h5>观看记录</h5>
				<ul>
					<li><a href="#">课程1...</a></li>
					<li><a href="#">课程2...</a></li>
					<li><a href="#">课程3...</a></li>
				</ul>
				<!-- ----------------------------------------------登录状态 -->
				
			</div>
			<div class="main-mid unit-60">
				<div class="units-row">
					<div class="unit-50">
						<h5>同步课堂</h5>
						<ul>
							@foreach($text as $item)
							<li><a href="course/{{$item['textid']}}">{{$item['texttitle']}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="unit-50">
						<h5>同步练习</h5>
						<ul>
							@foreach($text as $item)
							<li><a href="course/{{$item['textid']}}">{{$item['texttitle']}}</a></li>
							@endforeach
						</ul>
					</div>

				</div>
			<div class="question">
				<h5>每日一答</h5>
				<nav class="navbar nav-pills" data-tools="tabs" data-active="#tab1">
				    <ul>
				        <li><a href="#tab1">字</a></li>
				        <li><a href="#tab2">词</a></li>
				        <li class="active"><a href="#tab3">句</a></li>
				        <li><a href="#tab4">文</a></li>
				        
				    </ul>
				</nav>
 			<div class="question-box">
				<div id="tab1">
					<form method="post" action="" class="forms units-row">
					<div class="unit-70">
						<h6>问：---------------------------------------------------------------------?</h6>
						
							<ul class="forms-list ">
						        <li>
						        	<input type="radio" name="radio-1" id="radio-1">
						        	<label for="radio-1">Option 1</label>
						        </li>
						        <li>
						        	<input type="radio" name="radio-1" id="radio-2">
						        	<label for="radio-2">Option 2</label>
						        </li>
						        <li>
						        	<input type="radio" name="radio-1" id="radio-3">
						        	<label for="radio-3">Option 3</label>
						        </li>
						        <li>
						        	<input type="radio" name="radio-1" id="radio-4">
						        	<label for="radio-4">Option 4</label>
						        </li>
						    </ul>
						
					</div>
					
					
					<div class="unit-30">
						<img src="images/每日一答.png">
						<div style="clear:both;"></div>
						<button class="btn btn-blue">提交答案</button>
					</div>
				</form>

				</div>
				<div id="tab2">词</div>
				<div id="tab3">句</div>
				<div id="tab4">文</div>
			</div>
			<h5>边学边玩</h5>
			<div class="game units-row">
				<div class="unit-50">
					<img src="images/game.png"><a href="flappy小八哥.html" target="view_window">flappy小八哥</a>
				</div>
				<div class="unit-50">
					<img src="images/game.png"><a href="小八哥版2048！.html" target="view_window">小八哥2048</a>

				</div>
			</div>	
			</div>
			
			</div>
			<div class="main-right unit-20">
				<div class="tips">
					<h5>文学常识</h5>
					<ul>
							<li><a href="#">第一课...</a></li>
							<li><a href="#">第二课...</a></li>
							<li><a href="#">第三课...</a></li>
							<li><a href="#">第四课...</a></li>
					</ul>
				</div>
				<div class="tips">
					<h5>用户活跃度排行</h5>
					<ul>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">...</a></li>							
					</ul>
				</div>
				<div class="about">
					<h5>关于我们</h5>
				</div>

			</div>
		</div>
		
	</div>		
<script type="text/javascript" src="js/globle.js"></script>
	@stop
