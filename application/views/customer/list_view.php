<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix row">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="content-ri">
				<div class="rtop">
					<div class="search-wrap">
						<form class="form-inline" action="<?php echo site_url('/join/lists') ?>" method="post">
							<div class="form-group">
								<input name="name" value="<?php echo $this->input->post('name') ?>" type="text" class="form-control"  placeholder="公司名">
							</div>
							<div class="form-group">
								<input name="link_name" value="<?php echo $this->input->post('link_name') ?>" type="text" class="form-control" placeholder="联系人名">
							</div>
							<div class="form-group">
								<input name="address" value="<?php echo $this->input->post('address') ?>" type="text" class="form-control" placeholder="地址">
							</div>
							<button type="submit" class="btn btn-default">查询</button>
						</form>
					</div>
					<a href="<?php echo site_url('/customer/add') ?>" class="btn btn-success pull-right">添加</a>
				</div>
				<table class="customer-table">
					<thead>
						<tr>
							<th width="25%">客户公司名称</th>
							<th width="10%">联系人名</th>
							<th width="5%">性别</th>
							<th width="10%">电话</th>
							<th width="20%">地址</th>
							<th width="15%">关联我的公司</th>
							<th width="15%">操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>共致开源软件有限公司</td>
							<td>老秦</td>
							<td>男</td>
							<td>18301075531</td>
							<td>北京市海淀区上地十街</td>
							<td>纷享销客</td>
							<td>
								<a href="" class="a-link a-delete">删除</a>
								<a href="" class="a-link">编辑</a>
								<a href="" class="a-link">查看</a>
							</td>
						</tr>
						<tr>
							<td>共致开源软件有限公司</td>
							<td>老秦</td>
							<td>男</td>
							<td>18301075531</td>
							<td>北京市海淀区上地十街</td>
							<td>纷享销客</td>
							<td>
								<a href="" class="a-link a-delete">删除</a>
								<a href="" class="a-link">编辑</a>
								<a href="" class="a-link">查看</a>
							</td>
						</tr>
						<tr>
							<td>共致开源软件有限公司</td>
							<td>老秦</td>
							<td>男</td>
							<td>18301075531</td>
							<td>北京市海淀区上地十街</td>
							<td>纷享销客</td>
							<td>
								<a href="" class="a-link a-delete">删除</a>
								<a href="" class="a-link">编辑</a>
								<a href="" class="a-link">查看</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>