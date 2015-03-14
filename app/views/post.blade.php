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
							<span class="unit-10 seat">沙发</span>
							</div>

							
							<div class="content"><p>王维（701年－761年，一说699年—761年），汉族，唐朝河东蒲州（今山西运城）人，祖籍山西祁县，唐朝著名诗人、画家，字摩诘，号摩诘居士，世称“王右丞”，早年信道，后期因社会打击彻底禅化。存诗400余首，代表诗作有《相思》、《山居秋暝》等。王维参禅悟理,学庄信道,精通诗、书、画、音乐等，与孟浩然合称“王孟”。
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