<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

	<!-- 按钮触发器， 需要指定 target -->
<button class="am-btn am-btn-success" data-am-offcanvas="{target: '#doc-oc-demo3'}">右侧显示边栏</button>

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

<?php get_sidebar(); ?>

<?php get_footer(); ?>
