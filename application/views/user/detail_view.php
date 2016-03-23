<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">

				<div class="detail-cl">
					<label for="">昵称</label>
					<div class="detail-t"><?php echo $item['nike_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">账号</label>
					<div class="detail-t"><?php echo $item['username'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">权限</label>
					<div class="detail-t"><?php echo $item['role'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">状态</label>
					<div class="detail-t"><?php echo $item['status'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">头像</label>
					<div class="detail-t"><?php echo $item['avatar'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">创建时间</label>
					<div class="detail-t"><?php echo $item['create_at'] ?></div>
				</div>
				<div class="detail-cl bw-mt">
					<label for=""></label>
					<a href=<?php echo site_url('/user/edit/'. $item['user_id']) ?> class="btn btn-success">编辑</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>