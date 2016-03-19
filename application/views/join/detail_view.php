<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix row">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				
				<div class="detail-cl">
					<label for="">公司名称</label>
					<div class="detail-t"><?php echo $item['name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">联系人名</label>
					<div class="detail-t"><?php echo $item['link_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">电话</label>
					<div class="detail-t"><?php echo $item['link_tell'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">地址</label>
					<div class="detail-t"><?php echo $item['address'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">状态</label>
					<div class="detail-t"><?php echo $item['status'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">加入时间</label>
					<div class="detail-t"><?php echo $item['join_at'] ?></div>
				</div>
				<div class="detail-cl">
					<label for=""></label>
					<a href=<?php echo site_url('/join/edit/'. $item['id']) ?> class="btn btn-success btn-margin">编辑</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>