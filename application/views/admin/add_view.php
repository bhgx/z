<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form action="<?php echo site_url('/admin/add_save') ?>" method="post">
					<div class="form-group">
						<label for="">昵称</label>
						<input name="nike_name"  type="text" class="form-control bg-f" naxlength="40">
					</div>
					<div class="form-group">
						<label for="">账号</label>
						<input name="username" type="text" class="form-control bg-f" naxlength="16">
					</div>
					<div class="form-group">
						<label for="">密码</label>
						<input name="password" type="text" class="form-control" naxlength="20">
					</div>
					<div class="form-group">
						<label for="">头像</label>
						<input name="avatar" type="text" class="form-control" naxlength="100">
					</div>
					<div class="form-group">
						<label for="">角色权限</label>
						<select name="role" class="form-control">
							<?php foreach ($global_user_roles as $key => $value): ?>
								<option value="<?php echo $key ?>"><?php echo $value ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">状态</label>
						<select name="status" class="form-control">
							<?php foreach ($global_user_status as $key => $value): ?>
								<option value="<?php echo $key ?>"><?php echo $value ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">备注</label>
						<textarea name="summary" class="form-textarea form-control" maxlength="500"></textarea naxlength="200">
					</div>
					
					<div class="form-group text-center bw-mt">
						<button class="btn btn-success">保存</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>
<link rel="stylesheet" href="<?php echo base_url('application/resource/libs/My97DatePicker/skin/WdatePicker.css') ?>">
<script type="text/javascript" src="<?php echo base_url('application/resource/libs/My97DatePicker/WdatePicker.js') ?>"></script>


