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
    <script type="text/javascript" src="/Public/home/js/iban.js"></script>
    <script type="text/javascript" src="/Public/home/js/fban.js"></script>
    <script type="text/javascript" src="/Public/home/js/f_ban.js"></script>
    <script type="text/javascript" src="/Public/home/js/mban.js"></script>
    <script type="text/javascript" src="/Public/home/js/bban.js"></script>
    <script type="text/javascript" src="/Public/home/js/hban.js"></script>
    <script type="text/javascript" src="/Public/home/js/tban.js"></script>
    
    
<title>首页</title>

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
    	<div class="car_t">购物车 [ <span><?php echo ($count); ?></span> ]</div>
        <div class="car_bg">
       			<?php if($_SESSION['hid']): ?><ul class="cars">
            	<?php if(count($_SESSION['buycar']) > 0): if(is_array($buycar)): foreach($buycar as $key=>$row): ?><li>
                	<div class="img"><a href="/index.php/Home/Shou/product?id=<?php echo ($row['id']); ?>"><img src="/Public/<?php echo ($row['pic']); ?>" width="58" height="58" /></a></div>
                    <div class="name"><a href="/index.php/Home/Shou/product?id=<?php echo ($row['id']); ?>"><?php echo ($row['name']); ?></a></div>
                    <div class="price"><font color="#ff4e00">￥<?php echo ($row['price']); ?></font> X<?php echo ($row['num']); ?></div>
             </li><?php endforeach; endif; ?>
            <div class="price_a"><a href="/index.php/Home/Shou/Buycar">去购物车结算</a></div>       				
            	<?php else: ?>
            	购物车是空的<?php endif; ?>
            </ul>
       			<?php else: ?>
        	<div class="un_login">还未登录！<a href="Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div><?php endif; ?>

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
                                       <?php if(is_array($row['cate2'])): foreach($row['cate2'] as $keys=>$rows): ?><div class="zj_l_c">
                                                <h2><?php echo ($rows['name']); ?></h2>
                                                    <?php if(is_array($rows['cate3'])): foreach($rows['cate3'] as $keyss=>$rowss): ?><a href="/index.php/Home/shou/categorylist/index.html?id=<?php echo ($key); ?>,<?php echo ($keys); ?>,<?php echo ($keyss); ?>"><?php echo ($rowss['name']); ?></a>|<?php endforeach; endif; ?>
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

    <script type="text/javascript" src="/Public/home/js/lrscroll.js"></script>

    <script type="text/javascript" src="/Public/home/js/lrscroll_1.js"></script>
<div class="i_bg bg_color">
	<div class="i_ban_bg">
		<!--Begin Banner Begin-->
    	<div class="banner">    	
            <div class="top_slide_wrap">
            
                <ul class="slide_box bxslider">
                <?php if(is_array($pic)): foreach($pic as $key=>$row): ?><li><img src="<?php echo ($row['pic']); ?>" width="740" height="401" /></li><?php endforeach; endif; ?>
                </ul>	
            
                <div class="op_btns clearfix">
                    <a href="#" class="op_btn op_prev"><span></span></a>
                    <a href="#" class="op_btn op_next"><span></span></a>
                </div>        
            </div>
        </div>
        <script type="text/javascript">
        //var jq = jQuery.noConflict();
        (function(){
            $(".bxslider").bxSlider({
                auto:true,
                prevSelector:jq(".top_slide_wrap .op_prev")[0],nextSelector:jq(".top_slide_wrap .op_next")[0]
            });
        })();
        </script>
        <!--End Banner End-->
        <div class="inews">
        	<div class="news_t">
            	<span class="fr"><a href="#">更多 ></a></span>新闻资讯
            </div>
            <ul>
            	<li><span>[ 特惠 ]</span><a href="#">掬一轮明月 表无尽惦念</a></li>
            	<li><span>[ 公告 ]</span><a href="#">好奇金装成长裤新品上市</a></li>
            	<li><span>[ 特惠 ]</span><a href="#">大牌闪购 · 抢！</a></li>
            	<li><span>[ 公告 ]</span><a href="#">发福利 买车就抢千元油卡</a></li>
            	<li><span>[ 公告 ]</span><a href="#">家电低至五折</a></li>
            </ul>
            <div class="charge_t">
            	话费充值<div class="ch_t_icon"></div>
            </div>
            <form>
            <table border="0" style="width:205px; margin-top:10px;" cellspacing="0" cellpadding="0">
              <tr height="35">
                <td width="33">号码</td>
                <td><input type="text" value="" class="c_ipt" /></td>
              </tr>
              <tr height="35">
                <td>面值</td>
                <td>
                	<select class="jj" name="city">
                      <option value="0" selected="selected">100元</option>
                      <option value="1">50元</option>
                      <option value="2">30元</option>
                      <option value="3">20元</option>
                      <option value="4">10元</option>
                    </select>
                    <span style="color:#ff4e00; font-size:14px;">￥99.5</span>
                </td>
              </tr>
              <tr height="35">
                <td colspan="2"><input type="submit" value="立即充值" class="c_btn" /></td>
              </tr>
            </table>
            </form>
        </div>
    </div>
    <!--Begin 热门商品 Begin-->
    <div class="content mar_10">
    	<div class="h_l_img">
        	<div class="img"><img src="/Public/home/images/l_img.jpg" width="188" height="188" /></div>
            <div class="pri_bg">
                <span class="price fl">￥53.00</span>
                <span class="fr">16R</span>
            </div>
        </div>
        <div class="hot_pro">        	
        	<div id="featureContainer">
                <div id="feature">
                    <div id="block">
                        <div id="botton-scroll">
                            <ul class="featureUL">
                                <li class="featureBox">
                                    <div class="box">
                                    	<div class="h_icon"><img src="/Public/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                        	<a href="#"><img src="/Public/home/images/hot1.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                        	<a href="#">
                                            <h2>德国进口</h2>
                                            德亚全脂纯牛奶200ml*48盒
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>189</span></font> &nbsp; 26R
                                        </div>
                                    </div>
                                </li>
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img src="/Public/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                        	<a href="#"><img src="/Public/home/images/hot2.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                        	<a href="#">
                                            <h2>iphone 6S</h2>
                                            Apple/苹果 iPhone 6s Plus公开版
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>5288</span></font> &nbsp; 25R
                                        </div>
                                    </div>
                                </li>
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img src="/Public/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                        	<a href="#"><img src="/Public/home/images/hot3.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                        	<a href="#">
                                            <h2>倩碧特惠组合套装</h2>
                                            倩碧补水组合套装8折促销
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>368</span></font> &nbsp; 18R
                                        </div>
                                    </div>
                                </li>
                                <li class="featureBox">
                                    <div class="box">
                                        <div class="h_icon"><img src="/Public/home/images/hot.png" width="50" height="50" /></div>
                                        <div class="imgbg">
                                        	<a href="#"><img src="/Public/home/images/hot4.jpg" width="160" height="136" /></a>
                                        </div>                                        
                                        <div class="name">
                                        	<a href="#">
                                            <h2>品利特级橄榄油</h2>
                                            750ml*4瓶装组合 西班牙原装进口
                                            </a>
                                        </div>
                                        <div class="price">
                                            <font>￥<span>280</span></font> &nbsp; 30R
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="h_prev" href="javascript:void();">Previous</a>
                    <a class="h_next" href="javascript:void();">Next</a>
                </div>
            </div>
        </div>
    </div>
    <!--Begin 限时特卖 Begin-->
<!--     <div class="i_t mar_10">
    	<span class="fl">限时特卖</span>
        <span class="i_mores fr"><a href="#">更多</a></span>
    </div>
    <div class="content">
    	<div class="i_sell">
            <div id="imgPlay">
                <ul class="imgs" id="actor">
                    <li><a href="#"><img src="/Public/home/images/tm_r.jpg" width="211" height="357" /></a></li>
                    <li><a href="#"><img src="/Public/home/images/tm_r.jpg" width="211" height="357" /></a></li>
                    <li><a href="#"><img src="/Public/home/images/tm_r.jpg" width="211" height="357" /></a></li>
                </ul>
                <div class="previ">上一张</div>
                <div class="nexti">下一张</div>
            </div>        
        </div>
        <div class="sell_right">
        	<div class="sell_1">
            	<div class="s_img"><a href="#"><img src="/Public/home/images/tm_1.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>89</span></div>
                <div class="s_name">
                	<h2><a href="#">沙宣洗发水</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_2">
            	<div class="s_img"><a href="#"><img src="/Public/home/images/tm_2.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="#">德芙巧克力</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b1">
            	<div class="sb_img"><a href="#"><img src="/Public/home/images/tm_b1.jpg" width="242" height="356" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="#">东北大米</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_3">
            	<div class="s_img"><a href="#"><img src="/Public/home/images/tm_3.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="#">迪奥香水</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_4">
            	<div class="s_img"><a href="#"><img src="/Public/home/images/tm_4.jpg" width="185" height="155" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="#">美妆</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
            <div class="sell_b2">
            	<div class="sb_img"><a href="#"><img src="/Public/home/images/tm_b2.jpg" width="242" height="356" /></a></div>
            	<div class="s_price">￥<span>289</span></div>
                <div class="s_name">
                	<h2><a href="#">美妆</a></h2>
                    倒计时：<span>1200</span> 时 <span>30</span> 分 <span>28</span> 秒
                </div>
            </div>
        </div>
    </div> -->
    <!--End 限时特卖 End-->
    <div class="content mar_20">
    	<img src="/Public/home/images/mban_1.jpg" width="1200" height="110" />
    </div>
	

    <!--Begin 进口 生鲜 Begin-->
        <?php if(is_array($shops)): foreach($shops as $key=>$row): ?><div class="i_t mar_10">
        <span class="floor_num"><?php echo ($key); ?>F</span>
        <span class="fl"><?php echo ($row['name']); ?> <b>·</b> </span>    
        <span class="i_mores fr">
            <?php if(count($row['shops']) < 0): if(is_array($row['shops'])): foreach($row['shops'] as $key2=>$row2): ?><a href="/index.php/Home/shou/product/index.html?id=<?php echo ($row3['id']); ?>"><?php echo ($row2['name']); ?></a>&nbsp; &nbsp; &nbsp;<?php endforeach; endif; endif; ?>
        </span>
    </div>
    <div class="content">
        <div class="fresh_left">
            <div class="fre_ban">
                <div id="imgPlay1">
                    <ul class="imgs" id="actor1">
                            <?php if(is_array($row['shops'])): foreach($row['shops'] as $key3=>$row3): ?><li><a href="/index.php/Home/shou/product/index.html?id= <?php echo ($row3['id']); ?>"> <img src="/Public/<?php echo ($row3['pic']); ?>" width="211" height="286" /></a></li><?php endforeach; endif; ?>
                    </ul>
                    <div class="prevf">上一张</div>
                    <div class="nextf">下一张</div> 
                </div>   
            </div>
            <div class="fresh_txt">
                <div class="fresh_txt_c">
                <?php if(is_array($row['shops'])): foreach($row['shops'] as $key3=>$row3): ?><a href="/index.php/Home/shou/product/index.html?id=<?php echo ($row3['id']); ?>"><?php echo ($row3['name']); ?></a><?php endforeach; endif; ?>


                </div>
            </div>
        </div>
        <div class="fresh_mid">
            <ul>
                <?php if(is_array($row['shops'])): foreach($row['shops'] as $key3=>$row3): ?><li>
                    <div class="name"><a href="/index.php/Home/shou/product/index.html?id=<?php echo ($row3['id']); ?>"><?php echo ($row3['name']); ?></a></div>
                    <div class="price">
                        <font>￥<span><?php echo ($row3['price']); ?></span></font> &nbsp; 
                    </div>
                    <div class="img"><a href="/index.php/Home/shou/product/index.html?id=<?php echo ($row3['id']); ?>"><img src="/Public/<?php echo ($row3['pic']); ?>" width="185" height="155" /></a></div>
                </li><?php endforeach; endif; ?>
            </ul>
        </div>
        <div class="fresh_right">
            <ul>
                <li><a href="#"><img src="/Public/home/images/fre_b2.jpg" width="260" height="220" /></a></li>
                <li><a href="#"><img src="/Public/home/images/fre_b1.jpg" width="260" height="220" /></a></li>
            </ul>
        </div>
    </div><?php endforeach; endif; ?>
    <!--广告位-->
    <div class="content mar_20"  id="adv">
        <img src="/Public/home/images/mban_1.jpg" width="1200" height="110" />
    </div>
    <!--广告位-->
          
      
    <!--End 进口 生鲜 End-->
  
  
 
 
 
 
 

   
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