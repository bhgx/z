<header class="header" id="header">
	<a href="<?php echo site_url('/sale/lists') ?>" class="logo"></a>
	<div class="navigator">
		<ul class="clearfix">
			<?php 
				// echo site_url();
				// echo $_SERVER['PHP_SELF']
				$u = $this->uri->segment(1);
			 ?>
			<li><a class="<?php add_current($u, 'sale') ?>" href="<?php echo site_url('/sale/lists') ?>">交易记录</a></li>
			<li><a class="<?php add_current($u, 'customer') ?>" href="<?php echo site_url('/customer/lists') ?>">我的客户</a></li>
			<li><a class="<?php add_current($u, 'join') ?>" href="<?php echo site_url('/join/lists') ?>">我的公司</a></li>
			<li><a class="<?php add_current($u, 'user') ?>" href="<?php echo site_url('/user/info') ?>">账号信息</a></li>
			<li><a class="<?php add_current($u, 'user') ?>" href="<?php echo site_url('/user/lists') ?>">用户管理</a></li>
		</ul>
	</div>
	<a class="logout" href="<?php echo site_url('/user/logout') ?>">退出</a>
</header>