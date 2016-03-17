<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix row">
		<?php $this->load->view('template/side') ?>
		<div class="col-sm-10">
			<table class="customer-table">
				<thead>
					<tr>
						<th width="25%">客户公司名称</th>
						<th width="10%">联系人名</th>
						<th width="10%">电话</th>
						<th width="20%">地址</th>
						<th width="20%">关联我的公司</th>
						<th width="15%">操作</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>共致开源软件有限公司</td>
						<td>老秦</td>
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
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>