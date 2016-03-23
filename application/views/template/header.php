<header class="header" id="header">
	<a href="<?php echo site_url('/sale/lists') ?>" class="logo"></a>
	<div class="navigator">
		<ul class="clearfix">
			<?php 
				// echo site_url();
				// echo $_SERVER['PHP_SELF']
				$u = $this->uri->segment(1);
			 ?>
			<li><a class="<?php add_current($u, 'sale') ?>" href="<?php echo site_url('/sale') ?>">交易记录</a></li>
			<li><a class="<?php add_current($u, 'customer') ?>" href="<?php echo site_url('/customer') ?>">我的客户</a></li>
			<li><a class="<?php add_current($u, 'join') ?>" href="<?php echo site_url('/join') ?>">我的公司</a></li>
			<li><a class="<?php add_current($u, 'user') ?>" href="<?php echo site_url('/user') ?>">账号信息</a></li>
			<?php if($this->session->userdata('role') < 2): ?>
			<li><a class="<?php add_current($u, 'admin') ?>" href="<?php echo site_url('/admin') ?>">用户管理</a></li>
			<?php endif ?>
		</ul>
	</div>
	<a class="logout" href="<?php echo site_url('/user/logout') ?>">退出</a>
</header>