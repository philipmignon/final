<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>
	<div class="container">
		<div id="menu">
        	<div class="row">
            	<div class="col-xs-8">
                    <a href="<?php bloginfo('url'); ?>">
                        <div class="logo">
                        </div>
                    </a>
                </div>
                <div class="col-xs-4">
                    <div class="login">
                        <a href="">Not a Member Yet?</a> | <a href="<?php bloginfo('url'); ?>/log-in/">Sign In</a> | <a href="<?php bloginfo('url'); ?>/cart">Cart</a>
                    </div>
                </div>
            </div>
            <div class="menu-nav">
                <?php wp_nav_menu(['menu_class' => 'nav']); ?>
            </div>
            <div class="clear"></div>
        </div>