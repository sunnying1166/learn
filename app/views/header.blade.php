<header>
		<div class="left"> <a href="index">小八哥学汉字<i class="fa fa-book"></i></a> </div>
		<div class="right">
			<nav class="navbar">
				<ul>
					<li><a href="/index">首页</a></li>
					<li><a href="/course/1">同步课堂</a></li>
					<li><a href="#">同步练习</a></li>
					<li><a href="/forum">互动社区</a></li>
					<li><a href="#">边学边玩</a></li>
					<li><a href="/info">个人中心</a></li>
					@if(!Auth::check())
					<li><a href="/user/login">登陆</a></li>
					<li><a href="/user/register">注册</a></li>
					@endif
					@if(Auth::check())
					<li><a href="/info">{{Auth::user()->nickname}}</a></li>
					<li><a href="/user/logout">退出</a></li>
					@endif
				</ul>
				</nav>
		</div>
	</header>