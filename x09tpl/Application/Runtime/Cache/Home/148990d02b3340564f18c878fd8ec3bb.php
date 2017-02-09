<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link type="text/css" rel="stylesheet" href="/Public/home/css/style.css" />
    <!--[if IE 6]>
    <script src="/Public/home/js/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a'); 
        </script>
    <![endif]-->    
    <script type="text/javascript" src="/Public/home/js/jquery-1.11.1.min_044d0927.js"></script>
	<script type="text/javascript" src="/Public/home/js/jquery.bxslider_e88acd1b.js"></script>
    
    <script type="text/javascript" src="/Public/home/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/Public/home/js/menu.js"></script>    
        
	<script type="text/javascript" src="/Public/home/js/select.js"></script>
    
	<script type="text/javascript" src="/Public/home/js/lrscroll.js"></script>
    
    <script type="text/javascript" src="/Public/home/js/iban.js"></script>
    <script type="text/javascript" src="/Public/home/js/fban.js"></script>
    <script type="text/javascript" src="/Public/home/js/f_ban.js"></script>
    <script type="text/javascript" src="/Public/home/js/mban.js"></script>
    <script type="text/javascript" src="/Public/home/js/bban.js"></script>
    <script type="text/javascript" src="/Public/home/js/hban.js"></script>
    <script type="text/javascript" src="/Public/home/js/tban.js"></script>
    
	<script type="text/javascript" src="/Public/home/js/lrscroll_1.js"></script>
    
    
<title>尤洪注册</title>
</head>
<body>  
<!--Begin Header Begin-->
<div class="soubg">
	<div class="sou">
        <span class="fr">
        	<span class="fl">你好，请<a href="/index.php/Home/user/index">登录</a>&nbsp; <a href="Regist.html" style="color:#ff4e00;">免费注册</a>&nbsp; </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/Public/home/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<!--End Header End--> 
<!--Begin Login Begin-->
<div class="log_bg">	
    <div class="top">
        <div class="logo"><a href="Index.html"><img src="/Public/home/images/logo.png" /></a></div>
    </div>
	<div class="regist">
    	<div class="log_img"><img src="/Public/home/images/l_img.png" width="611" height="425" /></div>
		<div class="reg_c">
        
            <table border="0" style="width:420px; font-size:14px; margin-top:20px;" cellspacing="0" cellpadding="0">
              <tr height="50" valign="top">
              	<td width="95">&nbsp;</td>
                <td>
                	<span class="fl" style="font-size:24px;">注册</span>
                    <span class="fr">已有商城账号，<a href="/index.php/Home/user/index" style="color:#ff4e00;">我要登录</a></span>
                </td>
              </tr>
                <form action="/index.php/Home/user/dores" method="post">
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;用户名 &nbsp;</td>
                <td><input type="text" value="" class="l_user" name="name" required oninvalid="setCustomValidity('用户名不能为空')" oninput="setCustomValidity('')" /></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;密码 &nbsp;</td>
                <td><input type="password" value="" class="l_pwd" name="pwd" required oninvalid="setCustomValidity('密码不能为空')" oninput="setCustomValidity('')"/></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;确认密码 &nbsp;</td>
                <td><input type="password" value="" class="l_pwd" name="repwd" required oninvalid="setCustomValidity('请确认密码')" oninput="setCustomValidity('')"/></td>
              </tr>
              <tr height="50">
                <td align="right"><font color="#ff4e00">*</font>&nbsp;邮箱 &nbsp;</td>
                <td><input type="text" value="" class="l_email" name="email" required oninvalid="setCustomValidity('邮箱不能为空')" oninput="setCustomValidity('')"/></td>
              </tr>
             
              <tr height="50">
                <td align="right"> <font color="#ff4e00">*</font>&nbsp;验证码 &nbsp;</td>
                <td>
                    <input type="text" value="" class="l_ipt" name="fcode" id="zz"/>
                   <img id="yy"src="/index.php/Home/User/verify" alt="" onclick='this.src="/index.php/Home/User/verify?rand="+Math.random()'>看不清？<a onclick='a.src="/index.php/Home/User/verify?rand="+Math.random()'>换一张</a><br>
                    </a>
                </td>
              </tr>
             
              <tr height="60">
              	<td>&nbsp;</td>
                <td><input type="submit" value="立即注册" class="log_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
</div>
<!--End Login End--> 
<!--Begin Footer Begin-->
<div class="btmbg">
    <div class="btm">
        备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
        <img src="/Public/home/images/b_1.gif" width="98" height="33" /><img src="/Public/home/images/b_2.gif" width="98" height="33" /><img src="/Public/home/images/b_3.gif" width="98" height="33" /><img src="/Public/home/images/b_4.gif" width="98" height="33" /><img src="/Public/home/images/b_5.gif" width="98" height="33" /><img src="/Public/home/images/b_6.gif" width="98" height="33" />
    </div>    	
</div>
<!--End Footer End -->    

</body>

<script type="text/javascript">
  var a=document.getElementById('yy');
</script>
</html>