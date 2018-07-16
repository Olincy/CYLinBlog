<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		
		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <!--  -->
        <link href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css" rel="stylesheet" type="text/css">

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
			<header class="am-topbar am-topbar-inverse am-topbar-fixed-top">
			  <div class="am-container">
			    <h1 class="am-topbar-brand">
			      <a href="#" class="am-text-ir">Amaze UI</a>
			    </h1>

			    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
			            data-am-collapse="{target: '#doc-topbar-collapse-4'}"><span class="am-sr-only">导航切换</span> <span
			        class="am-icon-bars"></span></button>

			    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse-4">
			      <ul class="am-nav am-nav-pills am-topbar-nav">
			        <li class="am-active"><a href="#">首页</a></li>
			        <li><a href="#">项目</a></li>
			        <li class="am-dropdown" data-am-dropdown>
			          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
			            下拉 <span class="am-icon-caret-down"></span>
			          </a>
			          <ul class="am-dropdown-content">
			            <li><a href="#">带我去月球</a></li>
			            <li><a href="#">还是回地球</a></li>
			            <li class="am-disabled"><a href="#">臣妾做不到</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div>
			  </div>
			</header>
			<!-- /header -->
