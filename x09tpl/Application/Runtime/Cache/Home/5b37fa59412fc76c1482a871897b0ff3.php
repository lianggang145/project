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
    
    
<title>购物车</title>

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
 
 

</body>
<div class="i_bg">  
    <div class="content mar_20">
        <img src="/Public/home/images/img1.jpg" />        
    </div>
    <!--Begin 第一步：查看购物车 Begin -->
    <div class="content mar_20">
        <table border="0" class="car_tab" style="width:1200px; margin-bottom:50px;" cellspacing="0" cellpadding="0" id="allchecked">
          <tr>
            <td class="car_th" width="60">选择</td>
            <td class="car_th" width="290">商品名称</td>
            <td class="car_th" width="90">公司</td>
            <td class="car_th" width="140">单价</td>
            <td class="car_th" width="90">购买数量</td>
            <td class="car_th" width="130">小计</td>
            <td class="car_th" width="130">添加时间</td>
            <td class="car_th" width="150">操作</td>
          </tr>
          	<?php if(is_array($buycar)): foreach($buycar as $k=>$v): ?><tr id="tr<?php echo ($k); ?>">
        <td class="sorting_1"><input type="checkbox" value="<?php echo ($k); ?>"></td> 
            <td>
                <div class="c_s_img"><img src="<?php echo ($v->pic); ?>" width="73" height="73" /></div>
               <?php echo ($v['name']); ?>
            </td>
            <td align="center"><?php echo ($v['address']); ?></td>
            <td align="center" id="price<?php echo ($k); ?>"><?php echo ($v['price']); ?></td>
            <td align="center">
                <div class="c_num">
                    <input type="button" value="" onclick="jianUpdate1(jq(this));jisuan('<?php echo ($k); ?>')" class="car_btn_1" />
                    <input type="text" value="<?php echo ($v['num']); ?>" name="goods" id="sum<?php echo ($k); ?>" class="car_ipt" readonly/>  
                    <input type="button" value="" onclick="addUpdate1(jq(this));jisuan('<?php echo ($k); ?>')" class="car_btn_2" />
                </div>
            </td>
            <td align="center" style="color:#ff4e00;" id="xiaoji<?php echo ($k); ?>">￥<?php echo ($v['xiaoji']); ?></td>
            <td align="center" ><?php echo ($v['addtime']); ?></td>
            <td align="center"><a href="javascript:void(0)" onclick="del(<?php echo ($k); ?>)">删除</a>&nbsp; &nbsp;<a href="#">加入收藏</a></td>
          </tr><?php endforeach; endif; ?>
            	<?php if(count($buycar) > 0): ?><tr height="70">
          <td colspan="2" >
              <a href="javascript:void(0)" class="alldel">全选</a>|<a href="javascript:void(0)" class="nodel">全不选</a>|<a href="javascript:void(0)" class="fdel">反选</a>
          </td>
            <td colspan="6" style="font-family:'Microsoft YaHei'; border-bottom:0;">
                <span class="fr">商品总价：<b style="font-size:22px; color:#ff4e00;" id="zongjia">￥0</b></span>
            </td>
          </tr>
          <tr valign="top" height="150">
            <td colspan="8" align="right">
                <a href="/web/index"><img src="/Public/home/images/buy1.gif" /></a>&nbsp; &nbsp; <a href="javascript:void(0)" onclick="jiesuan()"><img src="/Public/home/images/buy2.gif" /></a>
            </td>
          </tr>
            	<?php else: ?>
          <tr height="70">
          <td colspan="2" >
          </td>
            <td colspan="6" style="font-family:'Microsoft YaHei'; border-bottom:0;">
                <span class="fr"><b style="font-size:22px; color:#ff4e00;">购物车是空的,<a href="/web/index">去别处逛逛</a></b></span>
            </td>
          </tr><?php endif; ?>
        </table>
        
    </div>
    <!--End 第一步：查看购物车 End--> 
    
 
    </body>  
    <script type="text/javascript">
        $(".menu_bg").remove();//.top+.menu_bg=head2
        $(".i_car").remove();//.top+.menu_bg=head2
        // $(".leftNav").remove();//.top+.menu_bg=head2

        // $(".leftNav").css('display','none');//分类列表
        // $(".nav_t").mouseover(function(){
        // $(".leftNav").css('display','block');
        // });

        $(':checkbox').click(function(event){
          // alert("111");
        zongjia=0;
        $("#allchecked").find('tr').each(function(){


          if(!$(this).find(":checkbox").attr('checked')){
            // alert($(this).find(":checkbox").val())

          }else{
            k=$(this).find(":checkbox").val();
            if(k!==undefined){

            // alert(k);
            zongjia=zongjia+Math.ceil($('#sum'+k).val()*$("#price"+k).html()*10)/10;
            }
          }

        })
            $('#zongjia').html(zongjia);
          });
      //全选
  $(".alldel").click(function(){
    // alert('全选');
    $('#allchecked').find('tr').each(function(){
      // alert('q1');
       $(this).find(":checkbox").attr('checked',true);
       // jisuan($this)
       // alert($(this).val());
        zongjia=0;
            	<?php if(is_array($buycar)): foreach($buycar as $k=>$v): ?>xiaoji<?php echo ($k); ?>=Math.ceil($('#sum<?php echo ($k); ?>').val()*$("#price<?php echo ($k); ?>").html()*10)/10;
            zongjia=xiaoji<?php echo ($k); ?>+zongjia;<?php endforeach; endif; ?>

            $('#zongjia').html(zongjia);

    })
  })

  //全不选
  $('.nodel').click(function(){
    $('#allchecked').find('tr').each(function(){
       $(this).find(':checkbox').attr('checked',false);
            $('#zongjia').html(0);
    })
  })
  //反选
 $(".fdel").click(function(){
  zongjia=0;
  $("#allchecked").find('tr').each(function(){
    if($(this).find(":checkbox").attr('checked')){
      // alert($(this).find(":checkbox").val())
      $(this).find(":checkbox").attr('checked',false);

    }else{
      $(this).find(":checkbox").attr('checked',true);
      k=$(this).find(":checkbox").val();
      if(k!==undefined){

      // alert(k);
      zongjia=zongjia+Math.ceil($('#sum'+k).val()*$("#price"+k).html()*10)/10;
      }
    }
  })
            $('#zongjia').html(zongjia);
  // alert($("#allchecked").find(':checkbox').length)
  // $("#allchecked").find('tr').each(function() {
  //   if($(this).find(":checkbox").attr('checked')){
  //     jisuan($(this).find(":checkbox").val());
  //   }
  // });
 })
        function del(k){
            if(confirm('确认删除商品吗？')){
                // alert(k);
                // $(this).parents('tr').remove();
                $('#tr'+k).remove();
                $.get('/web/buycardel/'+k, function(data) {
                    // alert(data);
                });
            }
        
        }
        //总价

        function jisuan(k){
            	<?php if(is_array($buycar)): foreach($buycar as $k=>$v): ?>xiaoji<?php echo ($k); ?>=Math.ceil($('#sum<?php echo ($k); ?>').val()*$("#price<?php echo ($k); ?>").html()*10)/10;
            zongjia=xiaoji<?php echo ($k); ?>+zongjia;<?php endforeach; endif; ?>
            zongjia=0;
        $("#allchecked").find('tr').each(function(){
          if(!$(this).find(":checkbox").attr('checked')){
            // alert($(this).find(":checkbox").val())
          }else{
            k=$(this).find(":checkbox").val();
            if(k!==undefined){
            // alert(k);
            zongjia=zongjia+Math.ceil($('#sum'+k).val()*$("#price"+k).html()*10)/10;
            }
          }
       $.ajax({
         url: '/web/shuliangbiangeng',
         type: 'get',
         data: {k:k,shuliang:$('#sum'+k).val()},
       })
       $('#xiaoji'+k).html("￥"+Math.ceil($('#sum'+k).val()*$("#price"+k).html()*10)/10);
        })
       $('#zongjia').html(zongjia);
     


        }
    //结算    
    function jiesuan(){
    var aa = new Array(); 
    $('#allchecked').find('tr').each(function(){
       id=$(this).find(":checkbox[checked='checked']").val();
        if(id===undefined){
       }else{
            aa.push(id);
       }
     
    })
    zj=$('#zongjia').html();
    // alert(aa);
    $.get('/web/checked',{id:aa,zj:zj}, function(data) {
      // alert(data);
      if(data!=="0"){
        window.location="/web/buycartwo";
      }
    });
    }

    </script>
  
 

   
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