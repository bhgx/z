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
					<a href="<?php echo site_url('/join/add') ?>" class="btn btn-success pull-right">添加</a>
				</div>
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
						<?php foreach ($query->result() as $row): ?>
							<tr>
							<td><?php echo $row->name?></td>
							<td><?php echo $row->link_name; ?></td>
							<td><?php echo $row->link_tell; ?></td>
							<td><?php echo $row->address; ?></td>
							<td><?php echo $row->join_at; ?></td>
							<td><?php echo $row->status; ?></td>
							<td>
								<a onclick="return confirm('确定要删除该公司么？');" href=<?php echo site_url('/join/delete/'. $row->id) ?> class="a-link a-delete">删除</a>
								<a href=<?php echo site_url('/join/edit/'. $row->id) ?> class="a-link">编辑</a>
								<a href=<?php echo site_url('/join/detail/'. $row->id) ?> class="a-link">查看</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>