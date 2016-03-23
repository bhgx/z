<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form action="<?php echo site_url('/user/change_pwd_save/') ?>" method="post">
					
					<div class="form-group">
						<label for="">原密码</label>
						<input name="old_password" type="password" class="form-control bg-f" naxlength="40">
					</div>
					<div class="form-group">
						<label for="">新密码</label>
						<input name="new_password" type="password" class="form-control bg-f" naxlength="40">
					</div>
					<div class="form-group">
						<label for="">再次输入新密码</label>
						<input name="re_password" type="password" class="form-control bg-f" naxlength="40">
					</div>
					<div class="form-group text-center bw-mt">
						<button onclick="return confirm('确定要修改么？');" class="btn btn-success">保存</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>

