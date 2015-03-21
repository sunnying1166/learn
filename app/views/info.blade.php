@extends('layout')
@section('head')
@parent
    <title>个人信息</title>
@stop
@section('body')
	@include("header")		
	@include("top")
	<div class="main">
		<div class="units-row">
			<div class="main-left unit-30">
				<h5>同步课堂</h5>
				<ul>
					<li><a href="#">古诗两首</a></li>
					<li><a href="#">风筝</a></li>
					<li><a href="#">秋天的雨</a></li>
					<li><a href="#">听听秋的雨声</a></li>
				</ul>
				<div class="links units-row">
					<div class="unit-50">
						<a href="#"><img src="images/ziyin.png"><br>字音学习</a>

					</div>
					<div class="unit-50">
						<a href="#"><img src="images/tongbu.png"><br>同步练习</a>
						
					</div>
									
				</div>
				<a class='btn btn-blue'><i class="fa fa-envelope"></i>信息反馈</a>	
			</div>
			<div class="unit-70 main-right">
				<h5>个人信息</h5>
				<form class="info-form" action='user/infochange' method="post">
				<table class="table table-bordered">
					<tr>
						<th>年级班级</th>
						<td>
							<select name="ugrade">
								<option value="1">一年级</option>
								<option value="2">二年级</option>
								<option value="3">三年级</option>
								<option value="4">四年级</option>
								<option value="3">五年级</option>
								<option value="4">六年级</option>
							</select>
							<select name="semester">
								<option value="up">上学期</option>
								<option down="down">下学期</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>教材选择</th>
						<td>
							<select name="textversion">
								<option value="1">人教版</option>
								<option value="2">苏教版</option>
								<option value="3">鄂教版</option>
								<option value="4">北师大版</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>昵称</th>
						<td>
							<input type="txt" name='nickname' placeholder='昵称'> 	

						</td>
					</tr>
					<tr>
						<th>地区</th>
						<td>
							<input type="txt" name='name' placeholder='地区'> 	

						</td>
					</tr>
					<tr>
						<th>个人简介</th>
						<td>
							<textarea name="uremark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad miniquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat. Duis aute irure dolor in reprehenderit in voluptate velitcillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</textarea>
						</td>
					</tr>
				</table>
				<button class="btn btn-blue" type="submit">保存</button>
				<button class="btn" >取消</button>
			</form>
			</div>
		</div>
	</div>		
	@include('footer')
	{{Input::has('msg') ? "<script type='text/javascript'>alert('修改信息成功');</script>" : "<h1>hello !</h1>"}}
@stop