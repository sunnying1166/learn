@extends('layout')
@sectioni('head')
@parent
    <title>帖子</title>
@stop
@section('body')
	@include("header")			
	@include("top")
	<div class="main">
		
		<input type="text" class="input-search unit-30" placeholder="请输入搜索内容"> <span>热搜：************</span>
		<h5>发帖</h5>
		<div class="right">
			<button class="btn btn-blue">返回列表</button> 
			<ul class="page">
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
			</ul>
			<button class="btn btn-blue">下一页</button>
		</div>
		<div class="posts">
			@for($i = 0; $i < 6; $i++)
			<div class="post-content">
				<div class="units-row">
					<div class="unit-20 post-left">
						
						<img class="head" src="images/hp14.jpg"><br>
						<a href="#" class="name">steve</a>
					</div>
					<div class="unit-80 post-right">
						<div class="post-info">
							<div class="units-row">
							<p class="unit-80 ">发表于：2011-8-16 9:50:23</p>
							<span class="unit-10 seat">板凳</span>
							</div>

							
							<div class="content"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endfor

		</div>
	</div>		
	@include('footer')
@stop