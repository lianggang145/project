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


<title>订单列表页</title>

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
                        <a href="/Public/#"><i class="icon-file"></i> 图片轮奸</a>
                        <ul class="closed">
                            <li><a href="/index.php/Admin/Pic/add">图片添加</a></li>
                            <li><a href="/index.php/Admin/Pic/doindex">图片列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href=""><i class="icon-file"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="/index.php/Admin/Shop/add">商品添加</a></li>
                            <li><a href="/index.php/Admin/Shop/index">商品列表</a></li>
                        </ul>
                    </li>
                        
                    <li>
                        <a href=""><i class="icon-file"></i>友情链接</a>
                        <ul class="closed">
                            <li><a href="/index.php/Admin/Link/add">链接添加</a></li>
                            <li><a href="/index.php/Admin/Link/index">链接列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icon-file"></i>订单管理</a>
                        <ul class="closed">
                            <li><a href="/index.php/Admin/Orders/index">订单列表</a></li>
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
<div id="mws-container" class="clearfix">
    
                               
    
    
    
    
    
    
    
    
    
    
    
		<head>
   <script type="text/javascript" src="/Public/b/js/jquery-1.8.3.min.js"></script>
 </head>
<div class="mws-panel grid_8 mws-collapsible">
    	<div class="mws-panel-header">
    	<span><i class="icon-table"></i> 订单列表页</span>
    <div class="mws-collapse-button mws-inset"></div></div>
    <div class="mws-panel-inner-wrap"><div class="mws-panel-body no-padding">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
        <div id="DataTables_Table_0_length" class="dataTables_length"> 
        <form action="/index.php/Admin/shop/index" method="get">
        	<input aria-controls="DataTables_Table_1" type="text" name="name" value="<?php echo ($_GET['name']); ?>"/></label>
        	<input type="submit" class="btn btn-success" value="搜索">
        </div>
        </form>
        <div id="users">
        <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
        <thead>

            
             <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 94px;" aria-label="Engine version: activate to sort column ascending">编号</th>  
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 156px;" aria-label="Browser: activate to sort column ascending">订单号</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 144px;" aria-label="Platform(s): activate to sort column ascending">商品描述</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 144px;" aria-label="Platform(s): activate to sort column ascending">商品图片</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 144px;" aria-label="Platform(s): activate to sort column ascending">商品库存</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 144px;" aria-label="Platform(s): activate to sort column ascending">地址</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 144px;" aria-label="Platform(s): activate to sort column ascending">添加时间</th>
            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 94px;" aria-label="Engine version: activate to sort column ascending">操作</th>
        </thead>                                                                                                                                                                                                       
               </tr>
          <?php if(is_array($list)): foreach($list as $key=>$row): ?><tr class="even" align="center">
               
                <td class=" "><span class="badge badge-success"><?php echo ($row['id']); ?></span></td>
                <td class=" "><span class="badge badge-success"><?php echo ($row['name']); ?></span></td>
                <td class=" "><span class="badge badge-success"><?php echo ($row['descr']); ?></span></td>
				 <td class=" "><img src="<?php echo ($row['pic']); ?>" alt="图片暂缺" width="120px" height="135px"></td>
				  <td class=" "><span class="badge badge-success"><?php echo ($row['num']); ?></span></td>
				   <td class=" "><span class="badge badge-success"><?php echo ($row['address']); ?></span></td>
				    <td class=" "><span class="badge badge-success"><?php echo ($row['time']); ?></span></td>
                <td class=" ">
                    <span class="btn-group">            
                        <a href="/index.php/Admin/Shop/edit/id/<?php echo ($row['id']); ?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                        <a href="/index.php/Admin/Shop/del/id/<?php echo ($row['id']); ?>" class="btn btn-small"><i class="icon-trash"></i></a>
                    </span>
                </td><?php endforeach; endif; ?>
          
			</tbody>
 	</table>
     <?php echo ($page); ?>
   
   

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