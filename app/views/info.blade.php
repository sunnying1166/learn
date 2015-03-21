@extends('layout')
@section('head')
@parent
    <title>个人信息</title>
@stop
@section('body')
	@include("header")		
	@include("top")
	<div class="main">

		<div class="units-row content">
			<div class="main-left unit-20">
				<!-- ----------------------------------------------未登录状态 -->
				<div class="log">
					<p><img src="images/小八哥学汉字图标.png"></p>
					<p>你好，您尚未<a href="#">登陆</a> , 还没账号？<a href="#">点此</a>注册</p>
				</div>
				<!-- ----------------------------------------------未登录状态 -->

				<!-- ----------------------------------------------登录状态 -->
				<div class="infobox">
					<div class="head-big">
						<img src="images/hp14.jpg">
					<p>Litter jeo</p>
					<a href="#">点此注销</a>
				</div>
				</div>
				<br>
			    <div>
				<p>个人积分：******</p>
				<p>个人等级：******</p>
				</div>
				<h5>您选择的教材信息</h5>
				<ul>
					<li><a href="#">人教版三年级上册</a></li>
					<a href="/info">—>修改教材信息</a>
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
            <span style="font-weight:bold;font-size:30px;">个人信息</span>
		      <br><a></a>
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
							<textarea name="uremark" style="height:100px";>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad miniquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commod consequat. Duis aute irure dolor in reprehenderit in voluptate velitcillum dolore eu fugiatnulla pariatur. Excepteur sint occaecat cupidatat nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</textarea>
						</td>
					</tr>
				</table>
				<a>
				<button class="btn btn-blue" type="submit">保存</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button  style="" class="btn btn-default" >取消</button></a>
			</form>
			<br><br>
	       <span style="font-weight:bold;font-size:30px;">发表帖子</span>
		   <br><a></a>
			<form class="info-form" action='user/333' method="post">
				<table class="table table-bordered">
					<tr>
						<th>帖子类别</th>
						<td>
							<select name="tiezikind">
								<option value="1">学习</option>
								<option value="2">经验</option>
								<option value="3">纯聊天</option>
							</select>
						</td>
					</tr>
					<tr>
						<th>帖子内容</th>
						<td>
							<textarea name="tiezicont" style="height:200px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad miniquis nostrud 
							</textarea>
						</td>
					</tr>
				</table>
				<a>
				<button class="btn btn-blue" type="submit">保存</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<button  style="" class="btn btn-default" >取消</button></a>
			</form>		
			</div>
			<div class="main-right unit-20">
				<div class="tips">
					<h5>发表的帖子</h5>
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
							<li><a href="#">第一课...</a></li>
							<li><a href="#">第二课...</a></li>
							<li><a href="#">第三课...</a></li>
							<li><a href="#">第四课...</a></li>
													
					</ul>
				</div>
				
			</div>
		</div>
		
	</div>		
	@include('footer')
	{{Input::has('msg') ? "<script type='text/javascript'>alert('修改信息成功');</script>" : "<h1>hello !</h1>"}}
@stop