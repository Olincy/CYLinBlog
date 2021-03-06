<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

          <!-- Set render engine for 360 browser -->
	  	<meta name="renderer" content="webkit">

		<!-- No Baidu Siteapp-->
		<meta http-equiv="Cache-Control" content="no-siteapp"/>

		<link rel="icon" type="image/png" href="{{assets}}i/favicon.png">

		<!-- Add to homescreen for Chrome on Android -->
		<meta name="mobile-web-app-capable" content="yes">
		<link rel="icon" sizes="192x192" href="{{assets}}i/app-icon72x72@2x.png">

		<!-- Add to homescreen for Safari on iOS -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-title" content="Amaze UI"/>
		<link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

		<!-- Tile icon for Win8 (144x144 + tile color) -->
		<meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
		<meta name="msapplication-TileColor" content="#0e90d2">

        <!--  -->
        <link href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css" rel="stylesheet" type="text/css">
        
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>



	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header">
				<div class="container">
					<h2>
				      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">C-Ryan's Blog</a>
				    </h2>

				    <div class="nav-menu">
			      		<ul class="">
			        	<li class=""><a href="#">iOS</a></li>
			        	<li class=""><a href="#">Swift</a></li>
			        	<li class=""><a href="#">PHP</a></li>
			        	<li class=""><a href="#">Python</a></li>
			        	<li class=""><a href="#">记录</a></li>
			       		<li><a href="" data-am-offcanvas="{target: '#doc-oc-demo3'}">关于博主</a></li>
			      		</ul>
			    	</div>
				</div>

				
			  
			</header>
			<!-- /header -->
			<!-- 侧边栏内容 -->
<div id="doc-oc-demo3" class="am-offcanvas">
  <div class="am-offcanvas-bar am-offcanvas-bar-flip">
    <div class="am-offcanvas-content">
      <p>
        我不愿让你一个人 <br/>
        承受这世界的残忍 <br/>
        我不愿眼泪陪你到 永恒 <br/>
      </p>
      <p><a href="http://music.163.com/#/song?id=385554" target="_blank">网易音乐</a>      </p>
    </div>
  </div>
</div>



