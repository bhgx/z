<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form action="<?php echo site_url('/user/edit_save/') ?>" method="post">
					<div class="ft">不可编辑项</div>
					<div class="detail-cl">
						<label for="">账号</label>
						<div class="detail-t"><?php echo $item['username'] ?></div>
					</div>

					<div class="detail-cl">
						<label for="">角色权限</label>
						<div class="detail-t"><?php echo $global_user_roles[$item['role']] ?></div>
					</div>
					<div class="detail-cl">
						<label for="">账号状态</label>
						<div class="detail-t"><?php echo $global_user_status[$item['status']] ?></div>
					</div>
					<?php if($item['role'] >= 7): ?>
					<div class="detail-cl">
						<label for="">头像</label>
						<div class="detail-t"><?php echo $item['avatar'] ?></div>
					</div>
					<?php endif ?>
					<div class="ft ft-mr">可编辑项</div>
					<div class="form-group">
						<label for="">昵称</label>
						<input name="nike_name" value="<?php echo $item['nike_name'] ?>" type="text" class="form-control bg-f" naxlength="40">
					</div>
					<?php if($item['role'] < 7): ?>
					<div class="form-group">
						<label for="">头像</label>
						<input name="avatar" value="<?php echo $item['avatar'] ?>" type="text" class="form-control" naxlength="100">
					</div>
					<?php endif ?>
					
					<div class="form-group text-center bw-mt">
						<a href="<?php echo site_url('/user/change_pwd/'. $item['user_id']) ?>" class="btn btn-link">修改密码</a>
						<button onclick="return confirm('确定要修改么？');" class="btn btn-success">保存</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>

