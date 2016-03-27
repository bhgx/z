<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form action="<?php echo site_url('/admin/edit_save/'.$item['user_id']) ?>" method="post">
					<div class="form-group">
						<label for="">昵称</label>
						<input name="nike_name" value="<?php echo $item['nike_name'] ?>" type="text" class="form-control bg-f" naxlength="40">
					</div>
					<div class="form-group">
						<label for="">账号</label>
						<input name="username" value="<?php echo $item['username'] ?>" type="text" class="form-control bg-f" naxlength="16">
					</div>
					<div class="form-group">
						<label for="">头像</label>
						<input name="avatar" value="<?php echo $item['avatar'] ?>" type="text" class="form-control" naxlength="100">
					</div>
					<div class="form-group">
						<label for="">角色权限</label>
						<?php if($item['role'] > 1): ?>
						<select name="role" class="form-control">
							<?php foreach ($global_user_roles_edit as $key => $value): ?>
								<option <?php add_selected($item['role'], $key); ?> value="<?php echo $key ?>"><?php echo $value ?></option>
							<?php endforeach ?>
						</select>
						<?php else: ?>
						<input name="role" type="hidden" value="<?php echo $item['role'] ?>" />
						<div class="edit-dis color-warm"><?php echo $global_user_roles[$item['role']] ?></div>
						<?php endif ?>
					</div>
					<div class="form-group">
						<label for="">状态</label>
						<select name="status" class="form-control">
							<?php foreach ($global_user_status as $key => $value): ?>
								<option <?php add_selected($item['status'], $key); ?> value="<?php echo $key ?>"><?php echo $value ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">备注</label>
						<textarea name="summary" class="form-textarea form-control" maxlength="500"><?php echo $item['summary'] ?>"</textarea >
					</div>
					
					<div class="form-group text-center bw-mt">
						<a href="<?php echo site_url('/admin/reset_pwd/'. $item['user_id']) ?>" class="btn btn-link">重置密码</a>
						<button onclick="return confirm('确定要修改么？');" class="btn btn-success">保存</button>
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


