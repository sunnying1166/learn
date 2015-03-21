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
				<div>
				<p>个人积分：******</p>
				<p>个人等级：******</p>
				</div>
				<h5>您选择的教材信息</h5>
				<ul>
					<li><a href="#">人教版三年级上册</a></li>
					<a href="/info">—>修改教材信息</a>
				</ul>
				
				<h5>学习记录</h5>
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
				    <h2>词语填空</h2>
				    <h5>1:天(___)				    
				      
				      <input name="1" onClick="fun('1')">
				    </h5>
				    <h5>2:晴天(___)(___)
				    <input name="2" onClick="fun('2')">
				    </h5>
				    <h5>3:日(___)
				    <input name="3" onClick="fun('3')">
				    </h5>
				    <h5>4:白雪(___)(___)
				   <input name="4" onClick="fun('4')">
				    </h5>

				  </div>
					<div class="unit-50">
					  <div align="left">
					    <h2>词语填空</h2>
                       <h5>5:天(___)				    
				      
				      <input name="5" onClick="fun('5')">
				    </h5>
				    <h5>6:晴天(___)(___)
				    <input name="6" onClick="fun('6')">
				    </h5>
				    <h5>7:日(___)
				    <input name="7" onClick="fun('7')">
				    </h5>
				    <h5>8:白雪(___)(___)
				   <input name="8" onClick="fun('8')">
				    </h5>
					  </div>
					  <div align="left"></div>
                    <div align="left"></div>
                   <div align="left"></div>
				</div>
			  </div>
				<div class="units-row">
				  <div class="units-row">
				    <div class="unit-50">
				      <h2>单项选择</h2>
				     <h5>9.高兴的同义词 </h5>
				      <h5>
				        <input type="radio" name="timu0"value="a" onClick="fun('9')" />
			          (a)烦恼</h5>
				      <h5>
				        <input type="radio" name="timu0"value="a" onClick="fun('9')" />
			          (b)开心</h5>
				      <h5>
				        <input type="radio" name="timu0"value="a" onClick="fun('9')" />
			          (c)不爽 </h5>
				      <h5>
				        <input type="radio" name="timu0"value="a" onClick="fun('9')" />
			          (d)悲伤 </h5>
				      <p>&nbsp;</p>
				    </div>
				    <div class="unit-50">
				      <h2>单项选择</h2>
				     <h5>10.高兴的同义词 </h5>
				      <h5>
				        <input type="radio" name="timu1"value="a" onClick="fun('10')" />
			          (a)烦恼</h5>
				      <h5>
				        <input type="radio" name="timu1"value="a" onClick="fun('10')" />
			          (b)开心</h5>
				      <h5>
				        <input type="radio" name="timu1"value="a" onClick="fun('10')" />
			          (c)不爽 </h5>
				      <h5>
				        <input type="radio" name="timu1"value="a" onClick="fun('10')" />
			          (d)悲伤 </h5>
				      <div align="left"></div>
				      <p>&nbsp;</p>
				      <div align="left"></div>
				      <div align="left"></div>
				      <div align="left">
				        <p>&nbsp;</p>
			          </div>
			        </div>
				  </div>
				  <div class="units-row">
				    <div class="unit-50">
				      <h2>单项选择</h2>
				    <h5>11.高兴的同义词 </h5>
				      <h5>
				        <input type="radio" name="timu2"value="a" onClick="fun('11')" />
			          (a)烦恼</h5>
				      <h5>
				        <input type="radio" name="timu2"value="a" onClick="fun('11')" />
			          (b)开心</h5>
				      <h5>
				        <input type="radio" name="timu2"value="a" onClick="fun('11')" />
			          (c)不爽 </h5>
				      <h5>
				        <input type="radio" name="timu2"value="a" onClick="fun('11')" />
			          (d)悲伤 </h5>
				      <p>&nbsp;</p>
			        </div>
				    <div class="unit-50">
				      <h2>单项选择</h2>
				     <h5>12.高兴的同义词 </h5>
				 
				      <h5>
				        <input type="radio" name="timu3"value="a" onClick="fun('12')" />
			          (a)烦恼</h5>
				      <h5>
				        <input type="radio" name="timu3"value="a" onClick="fun('12')" />
			          (b)开心</h5>
				      <h5>
				        <input type="radio" name="timu3"value="a" onClick="fun('12')" />
			          (c)不爽 </h5>
				      <h5>
				        <input type="radio" name="timu3"value="a" onClick="fun('12')" />
			          (d)悲伤 </h5>
				      <div align="left"></div>
				      <p>&nbsp;</p>
				      <div align="left"></div>
				      <div align="left"></div>
				      <div align="left">
				        <p>&nbsp;</p>
			          </div>
			        </div>
			      </div>
				  <div class="units-row">
				    <div class="unit-50">
				      <h2>单项选择</h2>
				     <h5>13.高兴的同义词 </h5>
				      <h5>
				        <input type="radio" name="timu4"value="a" onClick="fun('13')" />
			          (a)烦恼</h5>
				      <h5>
				        <input type="radio" name="timu4"value="a" onClick="fun('13')" />
			          (b)开心</h5>
				      <h5>
				        <input type="radio" name="timu4"value="a" onClick="fun('13')" />
			          (c)不爽 </h5>
				      <h5>
				        <input type="radio" name="timu4"value="a" onClick="fun('13')" />
			          (d)悲伤 </h5>
				      <p>&nbsp;</p>
			        </div>
				    <div class="unit-50">
				      <h2>单项选择</h2>
				      <h5>14.高兴的同义词 </h5>
				      <h5>
				        <input type="radio" name="timu5"value="a" onClick="fun('14')" />
			          (a)烦恼</h5>
				      <h5>
				        <input type="radio" name="timu5"value="a" onClick="fun('14')" />
			          (b)开心</h5>
				      <h5>
				        <input type="radio" name="timu5"value="a" onClick="fun('14')" />
			          (c)不爽 </h5>
				      <h5>
				        <input type="radio" name="timu5"value="a" onClick="fun('14')" />
			          (d)悲伤 </h5>
				      <div align="left"></div>
				      <div align="left"></div>
				      <div align="left"></div>
				      <div align="left">
				        <p>&nbsp;</p>
			          </div>
			        </div>
			      </div>
				  <div class="unit-50"></div>
			  </div>
				<div class="units-row">
				  <h2>完成句子</h2>
                  <ul>
                    <li>
                      <p align="left">15:她笑了。                              
                      <p align="left"> 扩写：
                        <input name="timuaddpun" onClick="fun('15')">
                    </li>
                    <li>
                      <p align="left">16:今天是个好天气，温度很高，阳光很暖和，而且没有雾霾。                              
                      <p align="left"> 扩写：
                        <input  name="timuaddsent" onClick="fun('16')">
                    </li>
                    <li>
                      <p align="left">17:骄傲自满是学习上的阻碍。                             
                      <p align="left"> 扩写：
                        <input name="timeill" onClick="fun('17')">
                    </li>
                  </ul>
			      <div></div>
			      <p>&nbsp;</p>
			  </div>
              <!----此处是“最下方方框的代码” 每个方框对应着题目的id,id的值对应着fun('x')的x,x也等于题号-->
              <div> 
                <p align="left">下面方框变成粉色表示对应题号的题目已经回答</p> 
                <div class="opt" id="1">
                  <div align="left">1
                    
                    
                  </div>
                </div> 
                <div class="opt" id="2">
                  <div align="left">2
                    
                    
                  </div>
                </div> 
                <div class="opt" id="3">
                  <div align="left">3
                    
                    
                  </div>
                </div> 
                <div class="opt" id="4">
                  <div align="left">4
                    
                    
                  </div>
                </div> 
                <div class="opt" id="5">
                  <div align="left">5
                    
                    
                  </div>
                </div> 
                <div class="opt" id="6">
                  <div align="left">6
                    
                    
                  </div>
                </div> 
                <div class="opt" id="7">
                  <div align="left">7
                    
                    
                  </div>
                </div> 
                <div class="opt" id="8">
                  <div align="left">8
                    
                    
                  </div>
                </div> 
                <div class="opt" id="9">
                  <div align="left">9
                    
                    
                  </div>
                </div> 
                <div class="opt" id="10">
                  <div align="left">10
                    
                    
                  </div>
                </div> 
                <div class="opt" id="11">
                  <div align="left">11
                    
                    
                  </div>
                </div> 
                <div class="opt" id="12">
                  <div align="left">12
                  </div>
                </div> 
                <div class="opt" id="13">
                  <div align="left">13
                  </div>
                </div>
                <div class="opt" id="14">
                  <div align="left">14
                  </div>
                </div> 
                <div class="opt" id="15">
                  <div align="left">15
                  </div>
                </div>
                <div class="opt" id="16">
                  <div align="left">16
                  </div>
                </div> 
                <div class="opt" id="17">
                  <div align="left">17
                  </div>
                </div>   
                </div> 
         <!---此处是方框代码的结束--->
         <br>
         <br><div align="center"><button class="btn btn-blue" >提交答案</button></div>
			</div>
            
            <!----此处--->
			<div class="main-right unit-20">
				<div class="tips">
					<h2>文学常识</h2>
					<ul>
							<li><a href="#">第一课...</a></li>
							<li><a href="#">第二课...</a></li>
							<li><a href="#">第三课...</a></li>
							<li><a href="#">第四课...</a></li>
					</ul>
				</div>
				<div class="tips">
					<h2>课程排行</h2>
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

			</div>
		</div>
	</div>			
	<footer>
		<p>小八哥学习网站</p>
		
	</footer>
			
		
	
</body>
</html>