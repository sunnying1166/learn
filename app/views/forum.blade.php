@extends('layout')
@section('head')
@parent
    <title>帖子</title>
@stop
@section('body')
	@include("header")
	@include("top")
	<div class="main">
		<h5>互动社区</h5>
		<input type="text" class="input-search unit-30" placeholder="请输入搜索内容"> <span>热搜：************</span>
		<ul class="mumbers">
			<li>今日：342</li>
			<li>昨日：331</li>
			<li>帖子：234231234</li>
			<li>会员：31231</li>
		</ul>
		<table class="table table-stripped">
		@for($i = 0; $i < 10; $i++)
			<tr>
				<td>标题|类型</td>
				<td> <a href="post"> 《风筝》的生词“憧憬”是什么意思？</a></td>
				<td>35/35</td>
				<td>steve</td>
				<td>2015-3-10</td>
			</tr>
		@endfor
		</table>
	</div>		
	@include('footer')
@stop