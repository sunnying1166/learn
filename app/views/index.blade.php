<!DOCTYPE html>
<html><head>
    <title>主页</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/kube.min.css">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="http://cdn.bootcss.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
    <script type="text/javascript" src="http://cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/kube.min.js"></script>
    <script type="text/javascript" src="http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  
</head>
<body >
	<header>
		<div class="left">小八哥学汉字<i class="fa fa-book"></i></div>
		<div class="right">
			<nav class="navbar">
				<ul>
					<li><a href="#">首页</a></li>
					<li><a href="#">同步课堂</a></li>
					<li><a href="#">同步练习</a></li>
					<li><a href="#">互动社区</a></li>
					<li><a href="#">边学边玩</a></li>
					<li><a href="#">个人中心</a></li>
					@if(!Auth::check())
					<li><a href="/user/login">登陆</a></li>
					<li><a href="#">注册</a></li>
					@endif
					@if(Auth::check())
					<li><a href="">{{Auth::user()->nickname}}</a></li>
					@endif
				</ul>
				</nav>

		</div>
	</header>			
	<div class="top"><input name="reply" type="text" class="input-reply width-100" placeholder="搜索课程">
		<div class="logo">人学始知道，不学非自然——《劝学》</div>
	</div>
	<div class="main">

		<div class="units-row content">
			<div class="main-left unit-20">
				<!-- ----------------------------------------------未登录状态 -->
				@if(!Auth::check())
				<div class="log">
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
				<h5>您订阅的课程</h5>
				<ul>
					<li><a href="#">课程1...</a></li>
					<li><a href="#">课程2...</a></li>
					<li><a href="#">课程3...</a></li>
					<li><a href="#">课程4...</a></li>
				</ul>
				<h5>观看记录</h5>
				<ul>
					<li><a href="#">课程1...</a></li>
					<li><a href="#">课程2...</a></li>
					<li><a href="#">课程3...</a></li>
					<li><a href="#">课程4...</a></li>
				</ul>
				<!-- ----------------------------------------------登录状态 -->
				
			</div>
			<div class="main-mid unit-60">
				<div class="units-row">
					<div class="unit-50">
						<h5>同步课堂</h5>
						<ul>
							<li><a href="#">第一课...</a></li>
							<li><a href="#">第二课...</a></li>
							<li><a href="#">第三课...</a></li>
							<li><a href="#">第四课...</a></li>
						</ul>
					</div>
					<div class="unit-50">
						<h5>同步练习</h5>
						<ul>
							<li><a href="#">第一课...</a></li>
							<li><a href="#">第二课...</a></li>
							<li><a href="#">第三课...</a></li>
							<li><a href="#">第四课...</a></li>
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
						<img src="images/noam_lovinsky-1321792a.jpg">
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
					<img src="images/noam_lovinsky-1321792a.jpg">
					小游戏1
				</div>
				<div class="unit-50">
					<img src="images/noam_lovinsky-1321792a.jpg">
					小游戏2
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
					<h5>课程排行</h5>
					<ul>
							<li><a href="#">第一课...</a></li>
							<li><a href="#">第二课...</a></li>
							<li><a href="#">第三课...</a></li>
							<li><a href="#">第四课...</a></li>
							<li><a href="#">第一课...</a></li>
							<li><a href="#">第二课...</a></li>
							<li><a href="#">第三课...</a></li>
							<li><a href="#">第四课...</a></li>							
					</ul>
				</div>
				<div class="about">
					<h5>关于我们</h5>
				</div>

			</div>
		</div>
		
	</div>		
	<footer>
		<p>小八哥学习网站</p>
	</footer>
<script type="text/javascript" src="js/globle.js"></script>
</body>
</html>