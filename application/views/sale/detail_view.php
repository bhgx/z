<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<div class="detail-cl">
					<label for="">交易日期</label>
					<div class="detail-t"><?php echo $item['sale_date'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">商品名</label>
					<div class="detail-t"><?php echo $item['goods_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">数量</label>
					<div class="detail-t"><?php echo $item['count'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">总价</label>
					<div class="detail-t"><?php echo $item['total_price'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">购买方</label>
					<div class="detail-t"><?php echo $item['customer_company_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">购买方联系人</label>
					<div class="detail-t"><?php echo $item['link_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">购买方电话</label>
					<div class="detail-t"><?php echo $item['link_tell'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">供货方</label>
					<div class="detail-t"><?php echo $item['join_company_name'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">交易地址</label>
					<div class="detail-t"><?php echo $item['address'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">创建时间</label>
					<div class="detail-t"><?php echo $item['create_at'] ?></div>
				</div>
				<div class="detail-cl">
					<label for="">备注</label>
					<div class="detail-t"><?php echo $item['summary'] ?></div>
				</div>
				
				<div class="detail-cl bw-mt">
					<label for=""></label>
					<a onclick="return confirm('确定要删除该交易记录么？')" href=<?php echo site_url('/sale/delete/'. $item['id']) ?> class="btn btn-danger mar-r20">删除</a>
					<a href=<?php echo site_url('/sale/edit/'. $item['id']) ?> class="btn btn-success">编辑</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>