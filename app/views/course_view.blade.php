@extends('layout')
@section('head')
@parent
    <title>同步课堂总览</title>
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
			<div align="center" style="color:#0000; font-weight:bold;size:35px">义务教育课程标准教科书　语文　三年级上册</div>
			<br>
				<div class="units-row">
					<div class="unit-50">
						<h5>第一组</h5>
						<ul>
							<li><a href="#">1.我们的小学</a></li>
							<li><a href="#">2.金色的草地</a></li>
							<li><a href="#">3.爬天都峰</a></li>
							<li><a href="#">4.槐乡的孩子</a></li>
							<li><a href="#">语文园地一</a></li>
						</ul>
					</div>
					<div class="unit-50">
						<h5>第五组</h5>
						<ul>
							<li><a href="#">17.孔子拜师</a></li>
							<li><a href="#">18.盘古开天地</a></li>
							<li><a href="#">19.赵州桥</a></li>
							<li><a href="#">20.一幅名扬中外的画</a></li>
							<li><a href="#">语文园地五</a></li>
						</ul>
					</div>
					
				</div>
				<div class="units-row">
					<div class="unit-50">
						<h5>第二组</h5>
						<ul>
							<li><a href="#">5.灰雀</a></li>
							<li><a href="#">6.小摄影师</a></li>
							<li><a href="#">7.奇怪的大石头</a></li>
							<li><a href="#">8.我不能失信</a></li>
							<li><a href="#">语文园地二</a></li>
						</ul>
					</div>
					<div class="unit-50">
						<h5>第六组</h5>
						<ul>
							<li><a href="#">21.古诗两首</a></li>
							<li><a href="#">&nbsp;望天门山</a></li>
							<li><a href="#">22.富饶的西沙群岛</a></li>
							<li><a href="#">23.美丽的小兴安岭</a></li>
							<li><a href="#">24.香港璀璨的明珠</a></li>
							<li><a href="#">语文园地六</a></li>
						</ul>
					</div>
					
				</div>
				<div class="units-row">
					<div class="unit-50">
						<h5>第三组</h5>
						<ul>
							<li><a href="#">9.古诗两首</a></li>
							<li><a href="#">&nbsp;夜书所见</a></li>
							<li><a href="#">&nbsp;九月九日忆山东兄弟</a></li>
							<li><a href="#">10.风筝</a></li>
							<li><a href="#">11.秋天的雨</a></li>
							<li><a href="#">12.听听，球的声音</a></li>
							<li><a href="#">语文园地三</a></li>
						</ul>
					</div>
					<div class="unit-50">
						<h5>第七组</h5>
						<ul>
							<li><a href="#">25.矛和盾的集合</a></li>
							<li><a href="#">26.科里亚的木匣</a></li>
							<li><a href="#">27.陶罐和铁罐</a></li>
							<li><a href="#">28.狮子和鹿</a></li>
							<li><a href="#">语文园地七</a></li>
						</ul>
					</div>
					
				</div>
			<div class="units-row">
					<div class="unit-50">
						<h5>第四组</h5>
						<ul>
							<li><a href="#">13.花钟</a></li>
							<li><a href="#">14.蜜蜂</a></li>
							<li><a href="#">15.玩出了名堂</a></li>
							<li><a href="#">16.找骆驼</a></li>
							<li><a href="#">语文园地四</a></li>
						</ul>
					</div>
					<div class="unit-50">
					
						<h5>第八组</h5>
						<ul>
							<li><a href="#">29.掌声</a></li>
							<li><a href="#">30.一次成功的实验</a></li>
							<li><a href="#">31.给予树</a></li>
							<li><a href="#">32.好汉查理</a></li>
							<li><a href="#">语文园地八</a></li>
						</ul>
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
			
		
	
</body>
</html>