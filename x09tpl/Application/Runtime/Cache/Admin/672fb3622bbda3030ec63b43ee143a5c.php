<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/Public/b/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/Public/b/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/Public/b/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Public/b/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Public/b/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/Public/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/Public/b/css/my.css" media="screen">


<title>商品添加</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/Public/b/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="/index.php/Admin/Login/logout" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign">退出</i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="/Public/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="/Public/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="/Public/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="/Public/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="/Public/#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="/Public/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="/Public/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="/Public/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="/Public/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="/Public/#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="/Public/#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/Public/b/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="/Public/#">Profile</a></li>
                        <li><a href="/Public/#">Change Password</a></li>
                        <li><a href="/Public/index.html">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href=""><i class="icon-user"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/index.php/Admin/user/add">用户添加</a></li>
                            <li><a href="/index.php/Admin/user/index">用户列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-th-list"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/index.php/Admin/Cate/add">分类添加</a></li>
                            <li><a href="/index.php/Admin/Cate/index">分类列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/Public/#"><i class="icon-file"></i> 文章管理</a>
                        <ul class="closed">
                            <li><a href="/Public/">文章添加</a></li>
                            <li><a href="/Public/">文章列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=""><i class="icon-file"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/index.php/Admin/Shop/add">商品添加</a></li>
                            <li><a href="/index.php/Admin/Shop/index">商品列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
<div id="mws-container" class="clearfix">
    
                               
    
    
<script type="text/javascript" charset="utf-8" src="/Public/admin/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/admin/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Public/admin/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span><i class="icon-pencil"></i>商品添加</span>
                    </div>
                    <div class="mws-panel-body no-padding">
                        <form class="mws-form" action="/index.php/Admin/shop/add1" method="post" enctype="multipart/form-data">
                            
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">商品名</label>
                                    <div class="mws-form-item">
                                        <input class="large" type="text" value="" name="name" required oninvalid="setCustomValidity('商品名空')" oninput="setCustomValidity('')">
                                    </div>
                                </div>                                                          
                                <div class="mws-form-row">
                                    <label class="mws-form-label">价格</label>
                                    <div class="mws-form-item">
                                        <input class="large" type="text" value="" name="price" required oninvalid="setCustomValidity('价格不能空')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">发源地</label>
                                    <div class="mws-form-item">
                                        <input class="large" type="text" name="address" required oninvalid="setCustomValidity('请填写发源地')" oninput="setCustomValidity('')">
                                    </div>
                                </div> 
                                <div class="mws-form-row">
                                    <label class="mws-form-label">数量</label>
                                    <div class="mws-form-item">
                                        <input class="large" type="text" name="num" required oninvalid="setCustomValidity('数量不能为空')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                 <div class="mws-form-row">
                                    <label class="mws-form-label">商品图片</label>
                                    <div class="mws-form-item">
                                         <div><input name="pic" style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;" type="file"></span></div> 
                                    </div>
                                </div>
                                 <div class="mws-form-row">
                                    <label class="mws-form-label">商品描述</label>
                                    <div class="mws-form-item">
                                        <script id="editor" type="text/plain"  name="descr" style="width:950px;height:300px;"></script>
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">商品类别</label>
                                    <div class="mws-form-item">
                                        <select class="required large" name="uid">
                                            <option value="0">--请选择--</option>
                                          
                                            <option value="">    </option> 
                                                                                                                                                  
                                        </select>
                                    </div>
                                </div>          
                              <div class="mws-button-row">
                                    
                                    
                                    <input value="Submit" class="btn btn-danger" type="submit">
                                    <input value="Reset" class="btn " type="reset">
                               </div>                       
                        </form>
                    </div>      
                               
                <script type="text/javascript">
               //实例化编辑器
               //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
               var ue = UE.getEditor('editor');
                </script>

    
    
    
  </div>      
  </div>        
    </div>
    </div>
    </div>
    </div>
    <!-- JavaScript Plugins -->
    <script src="/Public/b/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/Public/b/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/Public/b/js/libs/jquery.placeholder.min.js"></script>
    <script src="/Public/b/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/Public/b/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/Public/b/jui/jquery-ui.custom.min.js"></script>
    <script src="/Public/b/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/Public/b/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/Public/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/Public/b/plugins/flot/jquery.flot.min.js"></script>
    <script src="/Public/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/Public/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/Public/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/Public/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/Public/b/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/Public/b/plugins/validate/jquery.validate-min.js"></script>
    <script src="/Public/b/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/Public/b/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/b/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/Public/b/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/Public/b/js/demo/demo.dashboard.js"></script>

</body>
</html>