<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<link href="/028jiajiao/Public/css/head.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
	<div class="header">
    
		<ul>
       		<span class="welcome">欢迎访问<a href="/" style="color:#E90124">思问家教网</a>，思问家教拥有成都最大师资库，五万在校学生，在职教师的选择</span>
			<li><a href="javascript:window.external.AddFavorite('http://www.028jiajiao.com','全力打造成都家教品牌网站')" target="_self" class="top">收藏我们</a></li>
			<li><a href="/contact.asp" >联系我们</a></li>
			<li><a href="#" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.028jiajiao.com')" class="top">设为首页</a></li>
			<li><span>服务热线：<font>028-66009003&nbsp;&nbsp;</font></span></li>
		</ul>
	</div>
	<div class="zhongtu">
		<img src="/028jiajiao/Public/images/logosiwen.png" />
     </div>

  <!--导航栏开始位置-->
  <div class="nav">
  	<div id="sw_nav">
	<ul>
    	<li><a class="active-jh" href="/028jiajiao/index.php/Home/Index/index.html" >首 页</a></li>
        <li><a href="/028jiajiao/index.php/Home/Regxy/regxy" >请家教</a></li>
        <li><a href="/028jiajiao/index.php/Home/Regjy/regjy" >做家教</a></li>
        <li><a href="/028jiajiao/index.php/Home/Kuxy/kuxy">学员库</a></li>
        <li><a href="/028jiajiao/index.php/Home/Kujy/kujy" >教员库</a></li>
        <li><a href="/028jiajiao/index.php/Home/Index/news.html" >教育信息</a></li>
        <li><a href="/028jiajiao/index.php/Home/Index/about.html" >思问简介</a></li>
    </ul>
</div>
<script type="text/javascript">
						   
$(document).ready(function(){
 $("#layer_sw").mouseover(function(){
   $("#layer_sw > a").addClass("hover");
   $("#layer_sw div").css({"display":"block"});
 });
 $("#layer_sw").mouseout(function(){
   $("#layer_sw > a").removeClass("hover");
   $("#layer_sw div").css({"display":"none"});
 })
})
</script>
</div>
<!--导航栏结束-->
<!--头部滚动图片-->
<div class="g-cwp s-b1">
  <div class="m-tongji">成都家教网共有<em><?php echo ($jc); ?>16634</em>位教员任您挑选，已成功辅导过<em><?php echo ($xc); ?>8491</em>位学员</div>
  <p class="m-reg-xueyuan"><a href="/register_xueyuan.asp">请家教</a></p>
  <p class="m-reg-xueyuan-a"><a href="register_xueyuan.asp" target="_blank" >如何请家教？</a></p>
  <p class="m-reg-jiaoyuan"><a href="/register_jiaoyuan.asp">做家教</a></p>
  <p class="m-reg-jiaoyuan-a"><a href="register_jiaoyuan.asp" target="_blank">如何做家教？</a></p>
</div>
<!--end-->

</div>
</body>
</html>