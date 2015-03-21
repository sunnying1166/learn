@extends('layout')
@section('head')
@parent
    <title>同步课堂</title>
@stop

@section('body')
	@include("header")
	@include("top")
	<div class="main">
		<div class="units-row">
			<div class="main-left unit-30">
				<h5>同步课堂</h5>
				<ul>
					@foreach($text as $item)
					<li><a href="course/{{$item['textid']}}">{{$item['texttitle']}}</a></li>
					@endforeach
				</ul>
				<div class="links units-row">
					<div class="unit-50">
						<a href="#"><img src="images/ziyin.png"><br>同步课堂</a>

					</div>
					<div class="unit-50">
						<a href="#"><img src="images/tongbu.png"><br>互动社区</a>
						
					</div>
									
				</div>
				<a class='btn btn-blue'><i class="fa fa-envelope"></i>信息反馈</a>	
			</div>
			<div class="main-mid unit-30">
				<div class="newword">
					<h5>诗歌生词</h5>
					<ul>
						@foreach($anno as $item)
						<li class="strange">{{$item['zixing']}}({{$item['zipinyin']}})</li>
						@endforeach
					</ul>
				</div>
				<div class="exp">
					<h5>注释</h5>
					<ul>
						<li>古诗两首</li>
						<li>风筝</li>
						<li>秋天的雨</li>
						<li>听听秋的雨声</li>
						<li>古诗两首</li>
						<li>风筝</li>
						<li>秋天的雨</li>
						<li>听听秋的雨声</li>
						<li>古诗两首</li>
						<li>风筝</li>
						<li>秋天的雨</li>
						<li>听听秋的雨声</li>
						<li>古诗两首</li>
						<li>风筝</li>
						<li>秋天的雨</li>
						<li>听听秋的雨声</li>
					</ul>					
				</div>
			</div>
			<div class="main-right unit-40">
				<div class="artic">
					<h3>9.{{$single_text['texttitle']}}</h3>
					<a id="show-modal"
    data-tools="modal" data-width="700" 
    data-title="叶绍翁" data-content="modal/modal.html">{{$single_text['textauthor']}}</a>
					<div class="content">
						<p>
							{{$single_text['textcont']}}
						</p>
						<!-- <p>萧萧梧叶送寒声①，<br>江上秋风②动客情。<br>
						知有儿童③挑促织，<br>夜深篱④落一灯明。</p> -->
					</div>
				</div>
			</div>
		</div>
	</div>		
	<a href="" title="hhh">百度</a>
	<footer>
		<p>小八哥学习网站</p>
	</footer>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".strange").each(function(){
			alert('hello');
			var $x=-70;
   			var $y=-80;
			$(this).mouseover(function(e){
				var dom = '<div class="box"><p>今天的天气不错</p></div>';
				$("body").append(dom);
				$(".mapDiv").css({
			      top: (e.pageY + $y)+"px",
			      left: (e.pageX + $x)+"px"
			     }).show("fast");
			}).mouseout(function(){
				$('.box').remove();
			}).mousemove(function(e){
				$(.box).css({
					top: (e.pageY + $y)+"px",
      				left: (e.pageX + $x)+"px"
				});
			});
		});
	});
	</script>
@stop