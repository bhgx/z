<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form action="<?php echo site_url('/admin/reset_pwd_save/'.$item['user_id'].'/'.$item['username']) ?>" method="post">
					<div class="form-group text-center bw-mt">
						<button onclick="return confirm('确定要重置密码么？');" class="btn btn-danger btn-lg">重置密码</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>

