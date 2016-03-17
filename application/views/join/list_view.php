<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix row">
		<?php $this->load->view('template/side') ?>
		<div class="col-sm-10">
			<table class="customer-table">
				<thead>
					<tr>
						<th width="25%">公司名称</th>
						<th width="10%">联系人名</th>
						<th width="10%">电话</th>
						<th width="20%">地址</th>
						<th width="10%">入职时间</th>
						<th width="10%">状态</th>
						<th width="15%">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($query->result() as $row) { ?>
						<tr>
						<td><?php echo $row->name; ?></td>
						<td><?php echo $row->link_name; ?></td>
						<td><?php echo $row->link_tell; ?></td>
						<td><?php echo $row->address; ?></td>
						<td><?php echo $row->join_at; ?></td>
						<td><?php echo $row->status; ?></td>
						<td>
							<a href="" class="a-link a-delete">删除</a>
							<a href="" class="a-link">编辑</a>
							<a href="" class="a-link">查看</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>