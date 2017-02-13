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
    
    
<title>商品详情</title>

</head>
<body>  
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
    	
        <span class="fr">
            <?php if($_SESSION['name']): ?><span class="fl">欢迎，<?php echo ($_SESSION['name']); ?>，登陆</a>&nbsp;
                <a href="/index.php/Home/shou/lout">退出</a>&nbsp;
                <?php else: ?>
                <span class="fl">欢迎，请<a href="/index.php/Home/user/index">登录</a>
                <a href="/index.php/Home/user/registr" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<?php endif; ?>
            <a href="/index.php/Home/order/index">用户中心</a>&nbsp;|</span>
        	<span class="ss">
            	<div class="ss_list">
                	<a href="#">收藏夹</a>
                    <div class="ss_list_bg">
                    	<div class="s_city_t"></div>
                        <div class="ss_list_c">
                        	<ul>
                            	<li><a href="#">我的收藏夹</a></li>
                                <li><a href="#">我的收藏夹</a></li>
                            </ul>
                        </div>
                    </div>     
                </div>
                <div class="ss_list">
                	<a href="#">客户服务</a>
                    <div class="ss_list_bg">
                    	<div class="s_city_t"></div>
                        <div class="ss_list_c">
                        	<ul>
                            	<li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
                <div class="ss_list">
                	<a href="#">网站导航</a>
                    <div class="ss_list_bg">
                    	<div class="s_city_t"></div>
                        <div class="ss_list_c">
                        	<ul>
                            	<li><a href="#">网站导航</a></li>
                                <li><a href="#">网站导航</a></li>
                            </ul>
                        </div>
                    </div>    
                </div>
            </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="/Public/home/images/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<div class="top">
    <div class="logo"><a href="Index.html"><img src="/Public/home/images/logo.png" /></a></div>
    <div class="search">
    	<form>
        	<input type="text" value="" class="s_ipt" />
            <input type="submit" value="搜索" class="s_btn" />
        </form>                      
        <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
    </div>
    <div class="i_car">
    	<div class="car_t">购物车 [ <span>3</span> ]</div>
        <div class="car_bg">
       		<!--Begin 购物车未登录 Begin-->
        	<div class="un_login">还未登录！<a href="Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
            <!--End 购物车未登录 End-->
            <!--Begin 购物车已登录 Begin-->
            <ul class="cars">
            	<li>
                	<div class="img"><a href="#"><img src="/Public/home/images/car1.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                	<div class="img"><a href="#"><img src="/Public/home/images/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                	<div class="img"><a href="#"><img src="/Public/home/images/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
            </ul>
            <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span></div>
            <div class="price_a"><a href="#">去购物车结算</a></div>
            <!--End 购物车已登录 End-->
        </div>
    </div>
</div>
<!--End Header End--> 
<!--Begin Menu Begin-->
<div class="menu_bg">
	<div class="menu">
    	<!--Begin 商品分类详情 Begin-->    
    	<div class="nav">
        	<div class="nav_t">全部商品分类</div>
            <div class="leftNav">
                <ul>      
                    <?php if(is_array($cate)): foreach($cate as $key=>$row): ?><li>
                            <div class="fj">
                                <span class="n_img"><span></span><img src="/Public/home/images/nav1.png" /></span>
                                <span class="fl"><?php echo ($row['name']); ?></span>
                            </div>
                            <div class="zj" style="margin-top:<?php echo -40*$key;?>px">
                                <div class="zj_l">
                                       <?php if(is_array($row['cate2'])): foreach($row['cate2'] as $key=>$rows): ?><div class="zj_l_c">
                                                <h2><?php echo ($rows['name']); ?></h2>
                                                    <?php if(is_array($rows['cate3'])): foreach($rows['cate3'] as $key=>$rowss): ?><a href="#"><?php echo ($rowss['name']); ?></a>|<?php endforeach; endif; ?>
                                            </div><?php endforeach; endif; ?>
                                </div>
                                <div class="zj_r">
                                    <a href="#"><img src="/Public/home/images/n_img1.jpg" width="236" height="200" /></a>
                                    <a href="#"><img src="/Public/home/images/n_img2.jpg" width="236" height="200" /></a>
                                </div>
                            </div>
                        </li><?php endforeach; endif; ?>                	
                </ul>            
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
        <ul class="menu_r">                                                                                                                                               
        	<li><a href="Index.html">首页</a></li>
<!--             <li><a href="Food.html">美食</a></li>
            <li><a href="Fresh.html">生鲜</a></li>
            <li><a href="HomeDecoration.html">家居</a></li>
            <li><a href="SuitDress.html">女装</a></li>
            <li><a href="MakeUp.html">美妆</a></li>
            <li><a href="Digital.html">数码</a></li>
            <li><a href="GroupBuying.html">团购</a></li> -->
        </ul>
        <div class="m_ad">中秋送好礼！</div>
    </div>
</div>
<!--End Menu End--> 
 


    <link rel="stylesheet" type="text/css" href="/Public/home/css/ShopShow.css" />
    <link rel="stylesheet" type="text/css" href="/Public/home/css/MagicZoom.css" />
    <script type="text/javascript"src="/Public/home/js/MagicZoom.js"></script>
    
    <script type="text/javascript"src="/Public/home/js/num.js">
    	var jq = jQuery.noConflict();
    </script>
    <script type="text/javascript"src="/Public/home/js/shade.js"></script>



    <div class="i_bg">
    <div class="postion">
        <span class="fl">全部</span>
    </div>    
    <div class="content"> 
        <div id="tsShopContainer">
            <div id="tsImgS"><a href="/Public/<?php echo ($shop['pic']); ?>" title="Images" class="MagicZoom" id="MagicZoom"><img src="/Public/<?php echo ($shop['pic']); ?>" width="390" height="390" /></a></div>
            <div id="tsPicContainer">
                <div id="tsImgSArrL" onclick="tsScrollArrLeft()"></div>
                <div id="tsImgSCon">
                    <ul>
                        <li onclick="showPic(0)" rel="MagicZoom" class="tsSelectImg"><img src="/Public/<?php echo ($shop['pic']); ?>" tsImgS="/Public/<?php echo ($shop['pic']); ?>" width="79" height="79" /></li>
                        <li onclick="showPic(1)" rel="MagicZoom" class="tsSelectImg"><img src="/Public/<?php echo ($shop['pic']); ?>" tsImgS="/Public/<?php echo ($shop['pic']); ?>" width="79" height="79" /></li>
                    </ul>
                </div>
                <div id="tsImgSArrR" onclick="tsScrollArrRight()"></div>
            </div>
            <img class="MagicZoomLoading" width="16" height="16" src="/Public/b/ueditor/themes/default/images/loading.gif" alt="Loading..." />               
        </div>
        
        <div class="pro_des">
            <div class="des_name">
                <p><?php echo ($shop['name']); ?></p>
                上市时间<?php echo ($shop['time']); ?>
            </div>
            <div class="des_price">
                本店价格：￥<b id="price"><?php echo ($shop['price']); ?></b><br />
                地址：<span><?php echo ($shop['address']); ?></span>
            </div>
<!--             <div class="des_choice">
                <span class="fl">型号选择：</span>
                <ul id="choice">
                @foreach(session('size') as $k=>$v)
                    @if($v=="0")
                    <li class="checked" name="{<?php echo ($v); ?>}">{<?php echo ($k); ?>}</li>
                    @else
                    <li name="{<?php echo ($v); ?>}">{<?php echo ($k); ?>}</li>
                    @endif
                @endforeach
                </ul>
            </div>
            <div class="des_choice">
                <span class="fl">颜色选择：</span>
                <ul id="choice2">
                @foreach(session('color') as $k=>$v)
                    @if($v=="0")
                    <li class="checked" name="{<?php echo ($v); ?>}">{<?php echo ($k); ?>}</li>
                    @else
                    <li name="{<?php echo ($v); ?>}">{<?php echo ($k); ?>}</li>
                    @endif
                @endforeach
                </ul>
            </div> -->
             <div class="des_choice">
                <span class="fl">型号选择：</span>
                <ul id="choice">
                    <li class="checked" name="1">1</li>
                    <li name="2">2</li>
                    <li name="3">3</li>
                </ul>
            </div>
            <div class="des_choice">
                <span class="fl">颜色选择：</span>
                <ul id="choice2">

                    <li class="checked" name="1">1</li>
                    <li name="2">2</li>
                </ul>
            </div>
            <div class="des_share">
                <div class="d_sh">
                    分享
                    <div class="d_sh_bg">
                        <a href="#"><img src="/Public/home/images/sh_1.gif" /></a>
                        <a href="#"><img src="/Public/home/images/sh_2.gif" /></a>
                        <a href="#"><img src="/Public/home/images/sh_3.gif" /></a>
                        <a href="#"><img src="/Public/home/images/sh_4.gif" /></a>
                        <a href="#"><img src="/Public/home/images/sh_5.gif" /></a>
                    </div>
                </div>
                <div class="d_care"><a onclick="ShowDiv('MyDiv','fade')">关注商品</a></div>
            </div>
            <div class="des_join">
                <div class="j_nums">
                    <input type="text" value="1" name="" id="num" class="n_ipt" />
                    <input type="button" value="" onclick="addUpdate(jq(this));" class="n_btn_1" />
                    <input type="button" value="" onclick="jianUpdate(jq(this));" class="n_btn_2" />   
                </div>
                <span class="fl"><a onclick="ShowDiv_1('MyDiv1','fade1');buycaradd(<?php echo ($shop['id']); ?>)"><img src="/Public/home/images/j_car.png" /></a></span>
            </div>   
        </div>    
        
<!--         <div class="s_brand">
            <div class="s_brand_img"><img src="/Public/home/images/sbrand.jpg" width="188" height="132" /></div>
            <div class="s_brand_c"><a href="#">进入品牌专区</a></div>
        </div>    
 -->        
        
    </div>
    <div class="content mar_20">
<!--         <div class="l_history">
            <div class="fav_t">用户还喜欢</div>
            <ul>
                <li>
                    <div class="img"><a href="#"><img src="/Public/home/images/his_1.jpg" width="185" height="162" /></a></div>
                    <div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                        <font>￥<span>368.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/Public/home/images/his_2.jpg" width="185" height="162" /></a></div>
                    <div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                        <font>￥<span>768.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/Public/home/images/his_3.jpg" width="185" height="162" /></a></div>
                    <div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                        <font>￥<span>680.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/Public/home/images/his_4.jpg" width="185" height="162" /></a></div>
                    <div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                        <font>￥<span>368.00</span></font> &nbsp; 18R
                    </div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="/Public/home/images/his_5.jpg" width="185" height="162" /></a></div>
                    <div class="name"><a href="#">Dior/迪奥香水2件套装</a></div>
                    <div class="price">
                        <font>￥<span>368.00</span></font> &nbsp; 18R
                    </div>
                </li>
            </ul>
        </div>
 -->        <div class="l_list" >            
         <!--    <div class="des_border">
                <div class="des_tit">
                    <ul>
                        <li class="current">推荐搭配</li>
                    </ul>
                </div>
                <div class="team_list">
                    <div class="img"><a href="#"><img src="/Public/home/images/mat_1.jpg" width="160" height="140" /></a></div>
                    <div class="name"><a href="#">倩碧补水组合套装8折促销</a></div>
                    <div class="price">
                        <div class="checkbox"><input type="checkbox" name="zuhe" checked="checked" /></div>
                        <font>￥<span>768.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="/Public/home/images/jia_b.gif" /></div>
                <div class="team_list">
                    <div class="img"><a href="#"><img src="/Public/home/images/mat_2.jpg" width="160" height="140" /></a></div>
                    <div class="name"><a href="#">香奈儿邂逅清新淡香水50ml</a></div>
                    <div class="price">
                        <div class="checkbox"><input type="checkbox" name="zuhe" /></div>
                        <font>￥<span>749.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="/Public/home/images/jia_b.gif" /></div>
                <div class="team_list">
                    <div class="img"><a href="#"><img src="/Public/home/images/mat_3.jpg" width="160" height="140" /></a></div>
                    <div class="name"><a href="#">香奈儿邂逅清新淡香水50ml</a></div>
                    <div class="price">
                        <div class="checkbox"><input type="checkbox" name="zuhe" checked="checked" /></div>
                        <font>￥<span>749.00</span></font> &nbsp; 18R
                    </div>
                </div>
                <div class="team_icon"><img src="/Public/home/images/equl.gif" /></div>
                <div class="team_sum">
                    套餐价：￥<span>1517</span><br />
                    <input type="text" value="1" class="sum_ipt" /><br />
                    <a href="#"><img src="/Public/home/images/z_buy.gif" /></a> 
                </div>
                
            </div>
            <div class="des_border">
                <div class="des_tit">
                    <ul>
                        <li class="current"><a href="#p_attribute">商品属性</a></li>
                        <li><a href="#p_details">商品详情</a></li>
                        <li><a href="#p_comment">商品评论</a></li>
                    </ul>
                </div>
                <div class="des_con" id="p_attribute">
                    
                    <table border="0" align="center" style="width:100%; font-family:'宋体'; margin:10px auto;" cellspacing="0" cellpadding="0">
                      <tr>
                        <td>商品名称：迪奥香水</td>
                        <td>商品编号：1546211</td>
                        <td>品牌： 迪奥（Dior）</td>
                        <td>上架时间：2015-09-06 09:19:09 </td>
                      </tr>
                      <tr>
                        <td>商品毛重：160.00g</td>
                        <td>商品产地：法国</td>
                        <td>香调：果香调香型：淡香水/香露EDT</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td>容量：1ml-15ml </td>
                        <td>类型：女士香水，Q版香水，组合套装</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                    </table>                                               
                                            
                        
                </div>
            </div>  
            
            <div class="des_border" id="p_details">
                <div class="des_t">商品详情</div>
                <div class="des_con">
                    <table border="0" align="center" style="width:745px; font-size:14px; font-family:'宋体';" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="265"><img src="/Public/home/images/de1.jpg" width="206" height="412" /></td>
                        <td>
                            <b>迪奥真我香水(Q版)</b><br />
                            【商品规格】：5ml<br />
                            【商品质地】：液体<br />
                            【商品日期】：与专柜同步更新<br />
                            【商品产地】：法国<br />
                            【商品包装】：无外盒 无塑封<br />
                            【商品香调】：花束花香调<br />
                            【适用人群】：适合女性（都市白领，性感，有女人味的成熟女性）<br />
                        </td>
                      </tr>
                    </table>
                    
                    <p align="center">
                    <img src="/Public/home/images/de2.jpg" width="746" height="425" /><br /><br />
                    <img src="/Public/home/images/de3.jpg" width="750" height="417" /><br /><br />
                    <img src="/Public/home/images/de4.jpg" width="750" height="409" /><br /><br />
                    <img src="/Public/home/images/de5.jpg" width="750" height="409" />
                    </p>
                    
                </div>
            </div>  
             -->
            <div class="des_border" id="p_comment">
                <div class="des_t">商品评论</div>
                
<!--                 <table border="0" class="jud_tab" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="175" class="jud_per">
                        <p>80.0%</p>好评度
                    </td>
                    <td width="300">
                        <table border="0" style="width:100%;" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="90">好评<font color="#999999">（80%）</font></td>
                            <td><img src="/Public/home/images/pl.gif" align="absmiddle" /></td>
                          </tr>
                          <tr>
                            <td>中评<font color="#999999">（20%）</font></td>
                            <td><img src="/Public/home/images/pl.gif" align="absmiddle" /></td>
                          </tr>
                          <tr>
                            <td>差评<font color="#999999">（0%）</font></td>
                            <td><img src="/Public/home/images/pl.gif" align="absmiddle" /></td>
                          </tr>
                        </table>
                    </td>
                    <td width="185" class="jud_bg">
                        购买过雅诗兰黛第六代特润精华露50ml的顾客，在收到商品才可以对该商品发表评论
                    </td>
                    <td class="jud_bg">您可对已购买商品进行评价<br /><a href="#"><img src="/Public/home/images/btn_jud.gif" /></a></td>
                  </tr>
                </table>
                
 -->                
                                

                
            </div>
            
            
        </div>
    </div>    
</div>
    <!--Begin 弹出层-收藏成功 Begin-->
    <div id="fade" class="black_overlay"></div>
    <div id="MyDiv" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv('MyDiv','fade')"><img src="/Public/home/images/close.gif" /></span>
            </div>
            <div class="notice_c">
                
                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="40"><img src="/Public/home/images/suc.png" /></td>
                    <td>
                        <span style="color:#3e3e3e; font-size:18px; font-weight:bold;">您已成功收藏该商品</span><br />
                        <a href="#">查看我的关注 >></a>
                    </td>
                  </tr>
                  <tr height="50" valign="bottom">
                    <td>&nbsp;</td>
                    <td><a href="#" class="b_sure">确定</a></td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-收藏成功 End-->
    
    
    <!--Begin 弹出层-加入购物车 Begin-->
    <div id="fade1" class="black_overlay"></div>
    <div id="MyDiv1" class="white_content">             
        <div class="white_d">
            <div class="notice_t">
                <span class="fr" style="margin-top:10px; cursor:pointer;" onclick="CloseDiv_1('MyDiv1','fade1')"><img src="/Public/home/images/close.gif" /></span>
            </div>
            <div class="notice_c">
                
                <table border="0" align="center" style="margin-top:;" cellspacing="0" cellpadding="0">
                  <tr valign="top">
                    <td width="40"><img src="/Public/home/images/suc.png" /></td>
                    <td>
                        <span style="color:#3e3e3e; font-size:18px; font-weight:bold;">宝贝已成功添加到购物车</span><br />
                        <span id="count">购物车共有种宝贝</span> &nbsp; &nbsp; 
                    </td>
                  </tr>
                  <tr height="50" valign="bottom">
                    <td>&nbsp;</td>
                    <td><a href="/index.php/Home/shou/buycar" class="b_sure">去购物车结算</a><a href="/index.php/Home/shou/index" class="b_buy">继续购物</a></td>
                  </tr>
                </table>
                    
            </div>
        </div>
    </div>    
    <!--End 弹出层-加入购物车 End-->

<script type="text/javascript">  
    $('.leftNav').css('display', 'none');
    choices("choice");
    choices("choice2");
    function choices(name){
        $("#"+name).find('li').each(function(index, el) {
         $(this).click(function(event) {
                $("#"+name).find('li').each(function(index, el) {
                    $(this).removeClass('checked');
                });
                $(this).addClass('checked');
                // alert($(this).attr('name'));
                // alert($(".checked").attr('name'));
                // price={{session('product')->price}};
                // i=-1;
                // detail='';
                // $(".checked").each(function() {
                //     i=i++;
                //     // alert($(this).attr('name'));
                //     detail=detail+'-'+$(this).html();
                //     price=price+parseInt($(this).attr('name'));
                // });
                // i=-1;
                // // alert(detail);
                // $("#price").html(price);

         });   
        });
    }
    //数量
    // function jisuan(){
    //     $(this).click(function() {
    //         alert(document.getElementById('num').value);
    //     });
    // }
        // 加入购物车
        function buycaradd(k){ 
                // alert(detail);
                	<?php if($_SESSION['user']): ?>alert("请先登录");
            window.location="/web/login";<?php endif; ?>
            num=document.getElementById('num').value;
            var price=$("#price").html();
            $.get("/web/buycaradd/",{k:k,num:num,price:price}, function(data) {
            // alert(data);
                $('#count').html("购物车共有"+data+"种宝贝");
            });
        }
        //分页
        $("#pages").find('li').each(function() {
            $(this).css('float', 'left');
            $(this).css('margin-left', '20px');
        });
</script>
<script src="/Public/home/js/ShopShow.js"></script>
<script type="text/javascript" src="/Public/home/js/n_nav.js">
</script>  

<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->



  
 
 

   
    <!--Begin Footer Begin -->
    <div class="b_btm_bg b_btm_c">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Public/home/images/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Public/home/images/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Public/home/images/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="/Public/home/images/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
        <dl>                                                                                            
            <dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
            <dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
            <dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
            <a href="#" class="b_sh1">新浪微博</a>            
            <a href="#" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="/Public/home/images/er.gif" width="118" height="118" /></div>
            <img src="/Public/home/images/ss.png" />
        </div>
    </div>    
    <div class="btmbg">
        <div class="btm">
            备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="/Public/home/images/b_1.gif" width="98" height="33" /><img src="/Public/home/images/b_2.gif" width="98" height="33" /><img src="/Public/home/images/b_3.gif" width="98" height="33" /><img src="/Public/home/images/b_4.gif" width="98" height="33" /><img src="/Public/home/images/b_5.gif" width="98" height="33" /><img src="/Public/home/images/b_6.gif" width="98" height="33" />
        </div>      
    </div>
    <!--End Footer End -->    
</div>

</body>


<!--[if IE 6]>
<script src="/Public/home///letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
</html>