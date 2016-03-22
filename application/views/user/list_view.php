<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="content-ri">
				<div class="rtop">
					<div class="search-wrap">
						<form class="form-inline" action="<?php echo site_url('/admin/lists') ?>" method="post">
							<input name="username" value="<?php echo $this->input->post('username') ?>" type="text" class="form-control"  placeholder="账号">
							<input name="nike_name" value="<?php echo $this->input->post('nike_name') ?>" type="text" class="form-control"  placeholder="昵称">
							<button type="submit" class="btn btn-default">查询</button>
						</form>
					</div>
					<a href="<?php echo site_url('/admin/add') ?>" class="btn btn-success pull-right">添加</a>
				</div>
				<?php //echo $global_user_roles[1] ?>
				<table class="customer-table">
					<thead>
						<tr>
							<th width="15%">昵称</th>
							<th width="20%">账号</th>
							<th width="10%">权限</th>
							<th width="15%">状态</th>
							<th width="20%">创建时间</th>
							<th width="20%">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($query->result() as $row): ?>
							<tr>
							<td><?php echo $row->nike_name; ?></td>
							<td><?php echo $row->username; ?></td>
							<td><?php echo $row->role; ?></td>
							<td><?php echo $row->status; ?></td>
							<td><?php echo $row->create_at; ?></td>
							<td>
								<a onclick="return confirm('确定要删除该用户么？');" href=<?php echo site_url('/admin/delete/'. $row->user_id) ?> class="a-link a-delete">删除</a>
								<a href=<?php echo site_url('/admin/edit/'. $row->user_id) ?> class="a-link">编辑</a>
								<a href=<?php echo site_url('/admin/detail/'. $row->user_id) ?> class="a-link">查看</a>
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
<link rel="stylesheet" href="<?php echo base_url('application/resource/libs/My97DatePicker/skin/WdatePicker.css') ?>">
<script type="text/javascript" src="<?php echo base_url('application/resource/libs/My97DatePicker/WdatePicker.js') ?>"></script>
