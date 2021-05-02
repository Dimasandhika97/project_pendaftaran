<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Dashboard | Dynamic Admin Template</title>
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="application-name" content="" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>
        <!-- Css files -->
        <!-- Icons -->
        <link href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href=<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>"img/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="icon" href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body>
        <!--[if lt IE 9]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
      <?php $this->load->view($navbar); ?>
        <!-- #wrapper -->
        <div id="wrapper">
            <!-- .page-sidebar -->
            <aside id="sidebar" class="page-sidebar hidden-md hidden-sm hidden-xs">
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Profile</h5>
                        </div>
                        <!-- / .sidebar-panel -->
                        <div class="user-info clearfix">
                            <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/128.jpg" alt="avatar">
                            <span class="name">SuggeElson</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-xs"><i class="l-basic-gear"></i>
                                </button>
                                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">settings <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu right" role="menu">
                                    <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>profile.html"><i class="fa fa-edit"></i>Edit profile</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-money"></i>Windraws</a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-credit-card"></i>Deposits</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>login.html"><i class="fa fa-power-off"></i>Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Navigation</h5>
                        </div>
                        <!-- / .sidebar-panel -->
                        <!-- .side-nav -->
                        <div class="side-nav">
                            <ul class="nav">
                                <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>index.html"><i class="l-basic-laptop"></i><span class="txt">Dashboard</span></a>
                                </li>
                                <li><a href="http://themes.suggelab.com/#dynamic_frontend" target="_blank"><i class="l-basic-webpage"></i><span class="txt">Frontend</span><span class="label">hot</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="l-ecommerce-graph1"></i> <span class="txt">Charts</span></a>
                                    <ul class="sub">
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>charts-flot.html"><span class="txt">Flot charts</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>charts-morris.html"><span class="txt">Morris charts</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>charts-chartjs.html"><span class="txt">Chartjs </span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>charts-other.html"><span class="txt">Other charts</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-webpage-txt"></i><span class="txt">Forms</span></a>
                                    <ul class="sub">
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>forms-basic.html"><span class="txt">Basic forms</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>forms-advanced.html"><span class="txt">Advanced forms</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>forms-layouts.html"><span class="txt">Form layouts</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>forms-wizard.html"><span class="txt">Form wizard</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>forms-validation.html"><span class="txt">Form validation</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>code-editor.html"><span class="txt">Code editor</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-software-layout-header-3columns"></i><span class="txt">Tables</span></a>
                                    <ul class="sub">
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>tables-basic.html"><span class="txt">Basic tables</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>tables-data.html"><span class="txt">Data tables</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>tables-editable.html"><span class="txt">Editable tables</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>tables-ajax.html"><span class="txt">Ajax tables</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>tables-pricing.html"><span class="txt">Pricing tables</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-software-layers2"></i><span class="txt">UI Elements</span></a>
                                    <ul class="sub">
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>icons.html"><span class="txt">Icons</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>typography.html"><span class="txt">Typography</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>tabs.html"><span class="txt">Tabs</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>accordions.html"><span class="txt">Accordions</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>buttons.html"><span class="txt">Buttons</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>notifications.html"><span class="txt">Notifications</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>modals.html"><span class="txt">Modals</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>sliders.html"><span class="txt">Sliders</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>progressbars.html"><span class="txt">Progressbars</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>lists.html"><span class="txt">Lists</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>grid.html"><span class="txt">Grid</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>ui-other.html"><span class="txt">Other</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>portlets.html"><i class="l-software-layout-header"></i><span class="txt">Portlets</span><span class="label">22</span></a>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-mail"></i> <span class="txt">Email</span></a>
                                    <ul class="sub">
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>email-inbox.html"><span class="txt">Inbox</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>email-read.html"><span class="txt">Read email</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>email-write.html"><span class="txt">Write email</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-geolocalize-01"></i><span class="txt">Maps</span></a>
                                    <ul class="sub">
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>maps-google.html"><span class="txt">Google maps</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>maps-vector.html"><span class="txt">Vector maps</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="l-basic-webpage"></i><span class="txt">Pages</span></a>
                                    <ul class="sub">
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>login.html"><span class="txt">Login</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>lock-screen.html"><span class="txt">Lock screen</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>register.html"><span class="txt">Register</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>lost-password.html"><span class="txt">Lost password</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>profile.html"><span class="txt">User profile</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>calendar.html"><span class="txt">Calendar</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>timeline.html"><span class="txt">Timeline</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>gallery.html"><span class="txt">Gallery</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>invoice.html"><span class="txt">Invoice</span></a>
                                        </li>
                                        <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>blank.html"><span class="txt">Blank page</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><span class="txt">Error pages</span></a>
                                            <ul class="sub">
                                                <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>403.html"><span class="txt">403</span></a>
                                                </li>
                                                <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>404.html"><span class="txt">404</span></a>
                                                </li>
                                                <li><a href="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>500.html"><span class="txt">500</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- / side-nav -->
                        <!--  .sidebar-panel -->
                        <div class="sidebar-panel">
                            <h5 class="sidebar-panel-title">Server stats</h5>
                            <div class="sidebar-panel-content">
                                <div class="sidebar-stat mb10">
                                    <p class="color-white mb5 mt5"><i class="fa fa-hdd-o mr5"></i> Disk Space <span class="pull-right small">30%</span>
                                    </p>
                                    <div class="progress flat transparent progress-bar-xs">
                                        <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                    </div>
                                    <span class="dib s12 mt5 per100 text-center">3001.56 / 10000 MB</span>
                                </div>
                                <div class="sidebar-stat">
                                    <p class="color-white mb5 mt5"><i class="glyphicon glyphicon-transfer mr5"></i> Bandwidth Transfer <span class="pull-right small">78%</span>
                                    </p>
                                    <div class="progress flat transparent progress-bar-xs">
                                        <div class="progress-bar progress-bar-white" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                    </div>
                                    <span class="dib s12 mb10 mt5 per100 text-center">87565.12 / 120000 MB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </aside>
            <!-- / page-sidebar -->
            <!-- Start #right-sidebar -->
            <aside id="right-sidebar" class="right-sidebar hidden-md hidden-sm hidden-xs">
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <div class="tabs">
                            <!-- Start .rs tabs -->
                            <ul id="rstab" class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#activity" data-toggle="tab"><i class="glyphicon glyphicon-bullhorn"></i> </a>
                                </li>
                                <li>
                                    <a href="#users" data-toggle="tab"><i class="fa fa-comments"></i> </a>
                                </li>
                            </ul>
                            <div id="rstab-content" class="tab-content">
                                <div class="tab-pane fade active in" id="activity">
                                    <ul class="timeline timeline-icons timeline-sm">
                                        <li>
                                            <p>
                                                <a href="#">Jonh Doe</a> attached new <a href="#">file</a>
                                                <span class="timeline-icon"><i class="fa fa-file-text-o"></i></span>
                                                <span class="timeline-date">Dec 10, 22:00</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">Admin</a> approved <a href="#">3 new comments</a>
                                                <span class="timeline-icon"><i class="fa fa-comment"></i></span>
                                                <span class="timeline-date">Dec 8, 13:35</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">Jonh Smith</a> deposit 300$
                                                <span class="timeline-icon"><i class="fa fa-money color-green"></i></span>
                                                <span class="timeline-date">Dec 6, 10:17</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">Serena Williams</a> purchase <a href="#">3 items</a>
                                                <span class="timeline-icon"><i class="fa fa-shopping-cart color-red"></i></span>
                                                <span class="timeline-date">Dec 5, 04:36</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">1 support </a> request is received from <a href="#">Klaudia Chambers</a>
                                                <span class="timeline-icon"><i class="fa fa-life-ring color-gray-light"></i></span>
                                                <span class="timeline-date">Dec 4, 18:40</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                You received 136 new likes for <a href="#">your page</a>
                                                <span class="timeline-icon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                                                <span class="timeline-date">Dec 4, 12:00</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">12 settings </a> are changed from <a href="#">Master Admin</a>
                                                <span class="timeline-icon"><i class="glyphicon glyphicon-cog"></i></span>
                                                <span class="timeline-date">Dec 3, 23:17</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">Klaudia Chambers</a> change your photo
                                                <span class="timeline-icon"><i class="l-basic-photo"></i></span>
                                                <span class="timeline-date">Dec 2, 05:17</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">Master server </a> is down for 10 min.
                                                <span class="timeline-icon"><i class="l-basic-server2"></i></span>
                                                <span class="timeline-date">Dec 2, 04:56</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">12 links </a> are broken
                                                <span class="timeline-icon"><i class="fa fa-unlink"></i></span>
                                                <span class="timeline-date">Dec 1, 22:13</span>
                                            </p>
                                        </li>
                                        <li>
                                            <p>
                                                <a href="#">Last backup </a> is restored by <a href="#">Master admin</a>
                                                <span class="timeline-icon"><i class="fa fa-undo color-red"></i></span>
                                                <span class="timeline-date">Dec 1, 17:42</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="users">
                                    <div class="chat-user-list">
                                        <form class="form-vertical chat-search" role="form">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control input-sm" placeholder="Search ...">
                                                    <span class="input-group-btn">                                        
                                        <button class="btn btn-default btn-sm" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                                </div>
                                            </div>
                                            <!-- End .form-group  -->
                                        </form>
                                        <ul class="user-list list-group">
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/2.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Dean Huges</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li>
                                                            <div class="avatar">
                                                                <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/2.jpg" alt="@chadengle">
                                                            </div>
                                                            <p class="chat-name">Dean Huges <span class="chat-time">15 sec ago</span>
                                                            </p>
                                                            <div class="message">
                                                                <p class="chat-txt">We need to meet today. I have some things to show you.</p>
                                                            </div>
                                                        </li>
                                                        <li class="chat-me">
                                                            <div class="avatar">
                                                                <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/1.jpg" alt="@jonhdoe">
                                                            </div>
                                                            <p class="chat-name">SuggeElson <span class="chat-time">10 sec ago</span>
                                                            </p>
                                                            <div class="message message-info">
                                                                <p class="chat-txt">I have tons of work today maybe tomorrow will be fine</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="avatar">
                                                                <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/2.jpg" alt="@chadengle">
                                                            </div>
                                                            <p class="chat-name">Dean Huges <span class="chat-time">just now</span>
                                                            </p>
                                                            <div class="message">
                                                                <p class="chat-txt">Okay i will wait..</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/4.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Selena Jones</span>
                                                    <span class="status status-offline">offline from 1 Dec</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/5.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Mike Tomas</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/6.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Jim Kerry</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/7.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Little Jonh</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/8.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Keith Smith</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/9.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Tracy Miller</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/10.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Peter Petrovski</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="list-group-item clearfix">
                                                <a href="#">
                                                    <img src="img/avatars/11.jpg" alt="avatar" class="avatar">
                                                    <span class="name">Kim Lee</span>
                                                    <span class="status status-online">online</span>
                                                </a>
                                                <div class="chat-messages">
                                                    <ul>
                                                        <li class="chat-back"><a href="#">Back <i class="fa fa-chevron-right ml5"></i> </a>
                                                        </li>
                                                        <li class="no-messages">
                                                            <p class="text-center color-red">No messages are found</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <div id="chat-write">
                                            <form id="chat-write-form" class="form-vertical" role="form">
                                                <div class="form-group mb5">
                                                    <textarea name="writetext" id="chatwritearea" rows="3" class="form-control" placeholder="Type message ..."></textarea>
                                                </div>
                                                <!-- End .form-group  -->
                                                <div class="form-group mb0">
                                                    <a href="#" class="btn btn-link btn-sm p0 mr5 color-gray"><i class="fa fa-picture-o"></i> </a>
                                                    <a href="#" class="btn btn-link btn-sm p0 color-gray"><i class="fa fa-file"></i> </a>
                                                    <a href="#" class="btn btn-default btn-sm pull-right">Send</a>
                                                </div>
                                                <!-- End .form-group  -->
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .rs tabs -->
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </aside>
            <!-- End #right-sidebar -->
            <!-- .page-content -->
            <div class="page-content sidebar-page right-sidebar-page clearfix">
                <!-- .page-content-wrapper -->
                <div class="page-content-wrapper">
                    <div class="page-content-inner">
                        <!-- .page-content-inner -->
                        <div id="page-header" class="clearfix">
                            <div class="page-header">
                                <h2>Dashboard</h2>
                                <span class="txt">Welcome to Dynamic admin</span>
                            </div>
                            <div class="header-stats">
                                <div class="spark clearfix">
                                    <div class="spark-info"><span class="number">2345</span>Visitors</div>
                                    <div id="spark-visitors" class="sparkline"></div>
                                </div>
                                <div class="spark clearfix">
                                    <div class="spark-info"><span class="number">17345</span>Views</div>
                                    <div id="spark-templateviews" class="sparkline"></div>
                                </div>
                                <div class="spark clearfix">
                                    <div class="spark-info"><span class="number">3700$</span>Sales</div>
                                    <div id="spark-sales" class="sparkline"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- .row -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- .col-md-3 -->
                                <div class="panel panel-info tile panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Today Sales</h4>
                                    </div>
                                    <div class="panel-body pt0">
                                        <div class="progressbar-stats-1">
                                            <div class="stats">
                                                <i class="l-ecommerce-cart-content"></i> 
                                                <div id="visitor_number" class="stats-number" data-from="0" data-to="76">0</div>
                                            </div>
                                            <div class="progress animated-bar flat transparent progress-bar-xs mb10 mt0">
                                                <div class="progress-bar progress-bar-white" role="progressbar" data-transitiongoal="63"></div>
                                            </div>
                                            <div class="comparison">
                                                <p class="mb0"><i class="fa fa-arrow-circle-o-up s20 mr5 pull-left"></i> 10% up from last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- / .col-md-3 -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- .col-md-3 -->
                                <div class="panel panel-success tile panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Today Visitors</h4>
                                    </div>
                                    <div class="panel-body pt0">
                                        <div class="progressbar-stats-1">
                                            <div class="stats">
                                                <i class="l-basic-geolocalize-05"></i> 
                                                <div class="stats-number" data-from="0" data-to="2547">0</div>
                                            </div>
                                            <div class="progress animated-bar flat transparent progress-bar-xs mb10 mt0">
                                                <div class="progress-bar progress-bar-white" role="progressbar" data-transitiongoal="86"></div>
                                            </div>
                                            <div class="comparison">
                                                <p class="mb0"><i class="fa fa-arrow-circle-o-up s20 mr5 pull-left"></i> 2% up from last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- / .col-md-3 -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- .col-md-3 -->
                                <div class="panel panel-danger tile panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Support Questions</h4>
                                    </div>
                                    <div class="panel-body pt0">
                                        <div class="progressbar-stats-1">
                                            <div class="stats">
                                                <i class="l-basic-life-buoy"></i> 
                                                <div class="stats-number" data-from="0" data-to="78">0</div>
                                            </div>
                                            <div class="progress animated-bar flat transparent progress-bar-xs mb10 mt0">
                                                <div class="progress-bar progress-bar-white" role="progressbar" data-transitiongoal="35"></div>
                                            </div>
                                            <div class="comparison">
                                                <p class="mb0"><i class="fa fa-arrow-circle-o-down s20 mr5 pull-left"></i> 2% down from last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- / .col-md-3 -->
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                                <!-- .col-md-3 -->
                                <div class="panel panel-default tile panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Profit this month</h4>
                                    </div>
                                    <div class="panel-body pt0">
                                        <div class="progressbar-stats-1 dark">
                                            <div class="stats">
                                                <i class="l-banknote"></i> 
                                                <div class="stats-number money" data-from="0" data-to="24568">0</div>
                                            </div>
                                            <div class="progress animated-bar flat transparent progress-bar-xs mb10 mt0">
                                                <div class="progress-bar progress-bar-white" role="progressbar" data-transitiongoal="55"></div>
                                            </div>
                                            <div class="comparison">
                                                <p class="mb0"><i class="fa fa-arrow-circle-o-down s20 mr5 pull-left"></i> 1% down from last month</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- / .col-md-3 -->
                        </div>
                        <!-- / .row -->
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <!-- col-lg-8 start here -->
                                <div class="col-lg-9 col-sm-9 col-xs-12 p0">
                                    <!-- col-lg-9 start here -->
                                    <div class="panel panel-default plain btrr0 bbrr0 panelRefresh" data-mh="payments">
                                        <!-- Start .panel -->
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-dollar"></i> Payment received</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div id="line-chart-payments" style="width: 100%; height:250px;"></div>
                                        </div>
                                    </div>
                                    <!-- End .panel -->
                                </div>
                                <!-- col-lg-9 end here -->
                                <div class="col-lg-3 col-sm-3 col-xs-12 p0">
                                    <!-- col-lg-3 start here -->
                                    <div class="panel panel-default tile btlr0 bblr0" data-mh="payments">
                                        <!-- Start .panel -->
                                        <div class="panel-body">
                                            <div class="spark clearfix">
                                                <div class="spark-info mb0"><span class="number stats-number money s32" data-from="0" data-to="12857">0</span>
                                                </div>
                                                <div class="spark-info mtm5">Total income</div>
                                            </div>
                                            <div class="spark clearfix">
                                                <div class="spark-info mb0"><span class="number stats-number money s32 color-gray-light" data-from="0" data-to="4578"></span>
                                                </div>
                                                <div class="sparkline spark-payments mt0"></div>
                                                <div class="spark-info">Credit Card</div>
                                            </div>
                                            <div class="spark clearfix">
                                                <div class="spark-info mb0"><span class="number stats-number money s32 color-gray-light" data-from="0" data-to="5241"></span>
                                                </div>
                                                <div class="sparkline spark-payments mt0"></div>
                                                <div class="spark-info">Pay Pal</div>
                                            </div>
                                            <div class="db per100">
                                                <a href="#" class="btn btn-info ml20 mt5">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End .panel -->
                                </div>
                                <!-- col-lg-3 end here -->
                            </div>
                            <!-- col-lg-8 end here -->
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <!-- col-lg-4 start here -->
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="glyphicon glyphicon-user"></i> Customer experience</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <div id="customer-exp" class="custom-progressbar blue" style="width:244px;height:244px;">
                                                <div class="percent">80<span>%</span>
                                                </div>
                                                <div class="description">satisfaction</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-4 end here -->
                        </div>
                        <!-- End .row -->
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-8 col-md-12">
                                <!-- col-lg-8 start here -->
                                <div class="row">
                                    <!-- Start .row -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <!-- col-lg-6 start here -->
                                        <div class="col-lg-6 col-sm-6 p0">
                                            <!-- col-lg-6 start here -->
                                            <div class="panel tile panelRefresh">
                                                <!-- Start .panel -->
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"></h4>
                                                </div>
                                                <div class="panel-body p0">
                                                    <div class="weather snow">
                                                        <div class="degree color-red">-5&deg;</div>
                                                        <div class="location pb15"><i class="l-basic-geolocalize-01"></i> Varna</div>
                                                        <div class="icon">
                                                            <canvas id="weather-now" width="96" height="96"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End .panel -->
                                        </div>
                                        <!-- col-lg-6 end here -->
                                        <div class="col-lg-6 col-sm-6 p0">
                                            <!-- col-lg-6 start here -->
                                            <div class="panel tile btlr0 bblr0 mb0">
                                                <!-- Start .panel -->
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"></h4>
                                                </div>
                                                <div class="panel-body p0">
                                                    <div class="row weather no-padding">
                                                        <!-- Start .row -->
                                                        <div class="col-md-5 col-sm-5 text-center red-bg">
                                                            <canvas class="mt15" id="weather-monday" width="64" height="64"></canvas>
                                                            <h5 class="uppercase strong color-white">Monday</h5>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 text-center">
                                                            <div class="degree color-red">-2&deg;</div>
                                                            <p class="text-muted uppercase s12">forecast</p>
                                                        </div>
                                                    </div>
                                                    <!-- End .row -->
                                                </div>
                                            </div>
                                            <!-- End .panel -->
                                            <div class="panel tile btlr0 bblr0 mb0">
                                                <!-- Start .panel -->
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"></h4>
                                                </div>
                                                <div class="panel-body p0">
                                                    <div class="row weather no-padding">
                                                        <!-- Start .row -->
                                                        <div class="col-md-5 col-sm-5 text-center blue-bg">
                                                            <canvas class="mt15" id="weather-tuesday" width="64" height="64"></canvas>
                                                            <h5 class="uppercase strong color-white">Tuesday</h5>
                                                        </div>
                                                        <div class="col-md-7 col-sm-7 text-center">
                                                            <div class="degree color-blue">0&deg;</div>
                                                            <p class="text-muted uppercase s12">forecast</p>
                                                        </div>
                                                    </div>
                                                    <!-- End .row -->
                                                </div>
                                            </div>
                                            <!-- End .panel -->
                                        </div>
                                        <!-- col-lg-6 end here -->
                                    </div>
                                    <!-- col-lg-6 end here -->
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <!-- col-lg-6 start here -->
                                        <div class="panel panel-default plain toggle panelClose panelRefresh">
                                            <!-- Start .panel -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><i class="l-basic-target"></i> Montly Sales Goals</h4>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <!-- Start .row -->
                                                    <div class="col-md-6">
                                                        <ul class="list-unstyled" style="margin-bottom:13px;">
                                                            <li class="mb15">
                                                                <p class="strong mb0">Shirts <span class="text-muted pull-right small">100 of 200 sold</span>
                                                                </p>
                                                                <div class="progress animated-bar progress-bar-sm flat mt0">
                                                                    <div class="progress-bar progress-bar-primary" role="progressbar" data-transitiongoal="50"></div>
                                                                </div>
                                                            </li>
                                                            <li class="mb15">
                                                                <p class="strong mb0">Shoes <span class="text-muted pull-right small">150 of 200 sold</span>
                                                                </p>
                                                                <div class="progress animated-bar progress-bar-sm flat mt0">
                                                                    <div class="progress-bar progress-bar-danger" role="progressbar" data-transitiongoal="75"></div>
                                                                </div>
                                                            </li>
                                                            <li class="mb15">
                                                                <p class="strong mb0">Watches <span class="text-muted pull-right small">25 of 200 sold</span>
                                                                </p>
                                                                <div class="progress animated-bar progress-bar-sm flat mt0">
                                                                    <div class="progress-bar progress-bar-warning" role="progressbar" data-transitiongoal="12"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <p class="strong mb0">Coats <span class="text-muted pull-right small">195 of 300 sold</span>
                                                                </p>
                                                                <div class="progress animated-bar progress-bar-sm flat mt0">
                                                                    <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="66"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <div id="sales-goal" class="custom-progressbar green pull-left mr15" style="width:150px;height:150px;">
                                                                <div class="percent">470</div>
                                                                <div class="description s14">of 900 sold</div>
                                                            </div>
                                                        </div>
                                                        <div class="custom-progressbar-legend text-center">
                                                            <p class="text-left"><span class="strong">65%</span> Sold</p>
                                                            <p class="text-left"><span class="strong">35% </span> Left</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End .row -->
                                            </div>
                                        </div>
                                        <!-- End .panel -->
                                    </div>
                                    <!-- col-lg-6 end here -->
                                </div>
                                <!-- End .row -->
                                <div class="row">
                                    <!-- Start .row -->
                                    <div class="col-lg-12">
                                        <!-- col-lg-12 start here -->
                                        <div class="col-lg-4 col-md-6 p0">
                                            <!-- col-lg-4 start here -->
                                            <div class="panel panel-default tile btrr0 bbrr0" data-mh="sales-locations">
                                                <!-- Start .panel -->
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"><i class="glyphicon glyphicon-list-alt"></i> Latest Sales</h4>
                                                </div>
                                                <div class="panel-body pt0">
                                                    <ul class="list-unstyled mb0">
                                                        <li class="mb5 pb5 bbdashed">
                                                            <span class="strong">New Your:</span> order
                                                            <span class="color-red">#345675</span> - 176$
                                                        </li>
                                                        <li class="mb5 pb5 bbdashed">
                                                            <span class="strong">Vancuver:</span> order
                                                            <span class="color-red">#345674</span> - 56$
                                                        </li>
                                                        <li class="mb5 pb5 bbdashed">
                                                            <span class="strong">London:</span> order
                                                            <span class="color-red">#345673</span> - 12$
                                                        </li>
                                                        <li class="mb5 pb5 bbdashed">
                                                            <span class="strong">Barcelona:</span> order
                                                            <span class="color-red">#345672</span> - 34$
                                                        </li>
                                                        <li class="mb5 pb5 bbdashed">
                                                            <span class="strong">Moskva:</span> order
                                                            <span class="color-red">#345671</span> - 15$
                                                        </li>
                                                        <li class="mb5 pb5">
                                                            <span class="strong">Tokio:</span> order
                                                            <span class="color-red">#345669</span> - 67$
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End .panel -->
                                        </div>
                                        <!-- col-lg-4 end here -->
                                        <div class="col-lg-8 col-md-6 p0">
                                            <!-- col-lg-8 start here -->
                                            <div class="panel panel-default plain panelRefresh btlr0 bblr0" data-mh="sales-locations">
                                                <!-- Start .panel -->
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"><i class="fa l-basic-geolocalize-01"></i> Last sales locations</h4>
                                                </div>
                                                <div class="panel-body p0">
                                                    <div id="world-map" style="width: 100%; height: 250px"></div>
                                                </div>
                                            </div>
                                            <!-- End .panel -->
                                        </div>
                                        <!-- col-lg-8 end here -->
                                    </div>
                                    <!-- col-lg-12 end here -->
                                </div>
                                <!-- End .row -->
                            </div>
                            <!-- col-lg-8 end here -->
                            <div class="col-lg-4 col-md-12">
                                <!-- col-lg-4 start here -->
                                <div class="panel panel-default plain toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="fa fa-comments"></i>Customer Comments</h4>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-group recent-comments">
                                            <li class="list-group-item clearfix comment-success">
                                                <div class="avatar pull-left mr15">
                                                    <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/2.jpg" alt="avatar">
                                                </div>
                                                <p class="text-ellipsis"><span class="name strong">Ben Simpson: </span> Very happy with your support is really great, keep that quality.</p>
                                                <span class="date text-muted small pull-left">Dec 18, 2014, 4:24 pm</span>
                                                <a href="#" class="see-more small pull-right">View comment</a>
                                            </li>
                                            <li class="list-group-item clearfix comment-default">
                                                <div class="avatar pull-left mr15">
                                                    <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/3.jpg" alt="avatar">
                                                </div>
                                                <p class="text-ellipsis"><span class="name strong">Jonh: </span> Fine items but you could invest more time.</p>
                                                <span class="date text-muted small pull-left">Dec 18, 2014, 12:11 pm</span>
                                                <a href="#" class="see-more small pull-right">View comment</a>
                                            </li>
                                            <li class="list-group-item clearfix comment-info">
                                                <div class="avatar pull-left mr15">
                                                    <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/4.jpg" alt="avatar">
                                                </div>
                                                <p class="text-ellipsis"><span class="name strong">Dina Dowsen: </span> Awesome items, really fast delivery.</p>
                                                <span class="date text-muted small pull-left">Dec 18, 2014, 8:17 pm</span>
                                                <a href="#" class="see-more small pull-right">View comment</a>
                                            </li>
                                            <li class="list-group-item clearfix comment-warning">
                                                <div class="avatar pull-left mr15">
                                                    <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/5.jpg" alt="avatar">
                                                </div>
                                                <p class="text-ellipsis"><span class="name strong">Matt: </span> I`m not impressed but is fine.</p>
                                                <span class="date text-muted small pull-left">Dec 17, 2014, 6:24 pm</span>
                                                <a href="#" class="see-more small pull-right">View comment</a>
                                            </li>
                                            <li class="list-group-item clearfix comment-danger">
                                                <div class="avatar pull-left mr15">
                                                    <img src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>img/avatars/6.jpg" alt="avatar">
                                                </div>
                                                <p class="text-ellipsis"><span class="name strong">Ben Simpson: </span> This is worst item i ever seen.</p>
                                                <span class="date text-muted small pull-left">Dec 16, 2014, 1:20 pm</span>
                                                <a href="#" class="see-more small pull-right">View comment</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-4 end here -->
                        </div>
                        <!-- End .row -->
                    </div>
                    <!-- / .page-content-inner -->
                </div>
                <!-- / page-content-wrapper -->
            </div>
            <!-- / page-content -->
        </div>
        <!-- / #wrapper -->
        <div id="footer" class="clearfix sidebar-page right-sidebar-page">
            <!-- Start #footer  -->
            <p class="pull-left">
                Copyrights &copy; 2014 <a href="http://suggeelson.com/" class="color-blue strong" target="_blank">SuggeElson</a>. All rights reserved.
            </p>
            <p class="pull-right">
                <a href="#" class="mr5">Terms of use</a>
                |
                <a href="#" class="ml5 mr25">Privacy police</a>
            </p>
        </div>
        <!-- End #footer  -->
        <!-- Back to top -->
        <div id="back-to-top"><a href="#">Back to Top</a>
        </div>
        <!-- Javascripts -->
        <!-- Load pace first -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/core/pace/pace.min.js"></script>
        <!-- Important javascript libs(put in all pages) -->
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-2.1.1.min.js">\x3C/script>')
        </script>
        <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
        window.jQuery || document.write('<script src="js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')
        </script>
        <!--[if lt IE 9]>
  <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="js/libs/respond.min.js"></script>
<![endif]-->
        <!-- Bootstrap plugins -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>js/bootstrap/bootstrap.js"></script>
        <!-- Core plugins ( not remove ) -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>js/libs/modernizr.custom.js"></script>
        <!-- Handle responsive view functions -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>js/jRespond.min.js"></script>
        <!-- Custom scroll for sidebars,tables and etc. -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
        <!-- Remove click delay in touch -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/core/fastclick/fastclick.js"></script>
        <!-- Increase jquery animation speed -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/core/velocity/jquery.velocity.min.js"></script>
        <!-- Quick search plugin (fast search for many widgets) -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/core/quicksearch/jquery.quicksearch.js"></script>
        <!-- Bootbox fast bootstrap modals -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/ui/bootbox/bootbox.js"></script>
        <!-- Other plugins ( load only nessesary plugins for every page) -->
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>js/libs/date.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.custom.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.resize.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.growraf.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.categories.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.orderBars.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/flot/jquery.flot.curvedLines.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/charts/progressbars/progressbar.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/ui/waypoint/waypoints.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/ui/weather/skyicons.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/ui/notify/jquery.gritter.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/misc/vectormaps/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/misc/vectormaps/maps/jquery-jvectormap-world-mill-en.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>plugins/misc/countTo/jquery.countTo.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>js/jquery.dynamic.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>js/main.js"></script>
        <script src="<?php echo base_url('Bootstrap/Bootstrap/admin-html/'); ?>js/pages/dashboard.js"></script>
    </body>
</html>