<?php
	$website_URL = "http://zando.co.uk/uploadr";
?><!doctype html>
<html lang="en">
	<head>
    	<title><?=$config['website_name'];?></title>
        <link href="<?=$root;?>lib/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?=$root;?>lib/css/bootstrap-responsive.min.css" type="text/css" rel="stylesheet"/>
        <script src="<?=$root;?>lib/js/jquery-1.7.2.min.js"></script>
        <script src="<?=$root;?>lib/js/bootstrap.min.js"></script>
        <script src="<?=$root;?>lib/js/bootstrap-tab.js"></script>
        <script src="<?=$root;?>lib/js/bootstrap-dropdown.js"></script>
        <script src="<?=$root;?>lib/js/bootstrap-collapse.js"></script>
        <script src="<?=$root;?>lib/js/bootstrap-transition.js"></script>
        <script src="<?=$root;?>lib/js/bootstrap-alert.js"></script>
        <!--<script src="http://cookiecommons.com/cc.js?template=black"></script>--> <!-- Wait until an SSL is available on this service -->
	</head>
    <body>
    <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <ul class="nav">
                            <li>
                                <a class="brand" href="<?=$website_URL;?>"><?=$config['website_name'];?></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                	<li class="nav-header">Type - Premium</li>
                                    <li><a href="<?=$root;?>account/upgrade"><i class="icon-chevron-up"></i> Upgrade</a></li>
                                    <li><a href="<?=$root;?>account/upgrade/why.php"><i class="icon-info-sign"></i> Why Upgrade?</a></li>
                                	<li class="divider"></li>
                                    <li><a href="<?=$root;?>account/login.php"><i class="icon-user"></i> Login / Register</a></li><!-- Only visible if logged out -->
                                    <li><a href="<?=$root;?>account/logout.php"><i class="icon-off"></i> Logout</a></li><!-- Only visible if logged in -->
                                </ul>
                            </li>
                            <li class="dropdown">
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Messages <span class="badge badge-important">1</span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                               		<li><a href="<?=$root;?>messages/new.php"><i class="icon-pencil"></i> Create New</a></li>
                                	<li><a href="<?=$root;?>messages/inbox"><i class="icon-inbox"></i> Inbox</a></li>
                                    <li><a href="<?=$root;?>messages/sent"><i class="icon-envelope"></i> Sent</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?=$root;?>messages/info.php"><i class="icon-info-sign"></i> Notification Info</a></li>
                                </ul>
                            </li>
                            <li>
                            	<a class="dropdown-toggle" data-toggle="dropdown" href="#">DMCA</a>
                            </li>
                            
                        </ul>
                        	<form class="navbar-form pull-right">
                            	<input type="search" class="search-query" placeholder="Search" />
                            </form>
                    </div>
                </div>
            </div>