<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				
				<div class="detail-cl">
					<label for="">客户公司名称</label>
					<div class="detail-t"><?php echo $item['name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">联系人名</label>
					<div class="detail-t"><?php echo $item['link_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">联系人电话</label>
					<div class="detail-t"><?php echo $item['link_tell'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">联系人性别</label>
					<div class="detail-t"><?php echo $item['link_sex'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">地址</label>
					<div class="detail-t"><?php echo $item['address'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">关联我的公司</label>
					<div class="detail-t"><?php echo $item['link_join_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">状态</label>
					<div class="detail-t"><?php echo $item['status'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">开始时间</label>
					<div class="detail-t"><?php echo $item['create_at'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">备注</label>
					<div class="detail-t"><?php echo $item['summary'] ?></div>
				</div>
				<div class="detail-cl bw-mt">
					<label for=""></label>
					<a onclick="return confirm('确定要删除该客户么？')" href=<?php echo site_url('/customer/delete/'. $item['id']) ?> class="btn btn-danger mar-r20">删除</a>
					<a href=<?php echo site_url('/customer/edit/'. $item['id']) ?> class="btn btn-success">编辑</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>