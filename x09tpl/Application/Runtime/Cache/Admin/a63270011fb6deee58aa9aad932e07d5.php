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
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/x09tpl/Public/b/css/my.css" media="screen">


<title>用户添加</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/x09tpl/Public/b/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="/x09tpl/index.php/Admin/Login/logout" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign">退出</i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="/x09tpl/Public/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="/x09tpl/Public/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="/x09tpl/Public/#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="/x09tpl/Public/#">
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
	                        <a href="/x09tpl/Public/#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="/x09tpl/Public/#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="/x09tpl/Public/#">
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
                            	<a href="/x09tpl/Public/#">
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
                            	<a href="/x09tpl/Public/#">
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
                            	<a href="/x09tpl/Public/#">
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
	                        <a href="/x09tpl/Public/#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/x09tpl/Public/b/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                    	<li><a href="/x09tpl/Public/#">Profile</a></li>
                        <li><a href="/x09tpl/Public/#">Change Password</a></li>
                        <li><a href="/x09tpl/Public/index.html">Logout</a></li>
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
                        <a href="/x09tpl/index.php/Admin/user/add"><i class="icon-user"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/x09tpl/index.php/Admin/user/add">用户添加</a></li>
                            <li><a href="/x09tpl/index.php/Admin/user/index">用户列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/x09tpl/Public/#"><i class="icon-th-list"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/x09tpl/Public/">分类添加</a></li>
                            <li><a href="/x09tpl/Public/">分类列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/x09tpl/Public/#"><i class="icon-file"></i> 文章管理</a>
                        <ul class="closed">
                            <li><a href="/x09tpl/Public/">文章添加</a></li>
                            <li><a href="/x09tpl/Public/">文章列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/x09tpl/index.php/Admin/Shop/index"><i class="icon-file"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/x09tpl/index.php/Admin/Shop/add">商品添加</a></li>
                            <li><a href="/x09tpl/index.php/Admin/Shop/index">商品列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
<div id="mws-container" class="clearfix">
    
   <div id="mws-container" class="clearfix">
            	<div class="container">
                  
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>用户添加</span>
          </div>
          <div class="mws-panel-body no-padding">
               <form action="/x09tpl/index.php/Admin/User/insert" method="post" class="mws-form">
                  
                    <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">用户名:</label>
                              <div class="mws-form-item">
                                   <input value="" type="text" class="small" name="name" value="" required oninvalid="setCustomValidity('用户名不能为空')" oninput="setCustomValidity('')">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" name="pwd" class="small" value="" required oninvalid="setCustomValidity('密码不能为空')" oninput="setCustomValidity('')">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">确认密码:</label>
                              <div class="mws-form-item">
                                   <input type="password" name="repwd" class="small" value="" required oninvalid="setCustomValidity('请确认密码')" oninput="setCustomValidity('')">
                              </div>
                         </div>
                         <div class="mws-form-row">
                              <label class="mws-form-label">邮箱:</label>
                              <div class="mws-form-item">
                                   <input value="" type="text" name="email" class="small" value="" required oninvalid="setCustomValidity('邮箱不能为空')" oninput="setCustomValidity('')">
                              </div>
                         </div>
                    </div>
                    <div class="mws-button-row">
                         <input type="submit" class="btn btn-danger" value="添加">
                         <input type="reset" class="btn " value="重置">
                    </div>
               </form>
          </div>         
      </div>

                               
    
    
    
    
  </div>      
  </div>        
    </div>
    </div>
    </div>
    </div>
    <!-- JavaScript Plugins -->
  
    <script src="/x09tpl/Public/b/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/x09tpl/Public/b/js/libs/jquery.placeholder.min.js"></script>
    <script src="/x09tpl/Public/b/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/x09tpl/Public/b/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/x09tpl/Public/b/jui/jquery-ui.custom.min.js"></script>
    <script src="/x09tpl/Public/b/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/x09tpl/Public/b/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/x09tpl/Public/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/x09tpl/Public/b/plugins/flot/jquery.flot.min.js"></script>
    <script src="/x09tpl/Public/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/x09tpl/Public/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/x09tpl/Public/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/x09tpl/Public/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/x09tpl/Public/b/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/x09tpl/Public/b/plugins/validate/jquery.validate-min.js"></script>
    <script src="/x09tpl/Public/b/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/x09tpl/Public/b/bootstrap/js/bootstrap.min.js"></script>
    <script src="/x09tpl/Public/b/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/x09tpl/Public/b/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/x09tpl/Public/b/js/demo/demo.dashboard.js"></script>

</body>
</html>