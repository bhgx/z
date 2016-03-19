<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="content-ri">
				<div class="rtop">
					<div class="search-wrap">
						<form class="form-inline" action="<?php echo site_url('/customer/lists') ?>" method="post">
							<div class="form-group">
								<input name="name" value="<?php echo $this->input->post('name') ?>" type="text" class="form-control"  placeholder="公司名">
							</div>
							<div class="form-group">
								<input name="link_name" value="<?php echo $this->input->post('link_name') ?>" type="text" class="form-control" placeholder="联系人名">
							</div>
							<div class="form-group">
								<input name="address" value="<?php echo $this->input->post('address') ?>" type="text" class="form-control" placeholder="地址">
							</div>
							<div class="form-group">
								<select name="link_join_id" class="form-control" placeholder="关联公司">
									<option value="">全部</option>
									<?php foreach ($joins->result() as $row): ?>
									<option <?php add_selected($this->input->post('link_join_id'), $row->id) ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
									<?php endforeach ?>
								</select>
							</div>
							<button type="submit" class="btn btn-default">查询</button>
						</form>
					</div>
					<a href="<?php echo site_url('/customer/add') ?>" class="btn btn-success pull-right">添加</a>
				</div>
				<table class="customer-table">
					<thead>
						<tr>
							<th width="20%">客户公司名称</th>
							<th width="10%">联系人名</th>
							<th width="5%">性别</th>
							<th width="10%">电话</th>
							<th width="17%">地址</th>
							<th width="15%">关联我的公司</th>
							<th width="5%">状态</th>
							<th width="18%">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($query->result() as $row): ?>
							<tr>
							<td><?php echo $row->name?></td>
							<td><?php echo $row->link_name; ?></td>
							<td><?php echo $row->link_sex; ?></td>
							<td><?php echo $row->link_tell; ?></td>
							<td><?php echo $row->address; ?></td>
							<td><?php echo $row->link_join_name; ?></td>
							<td><?php echo $row->status; ?></td>
							<td>
								<a onclick="return confirm('确定要删除该客户么？');" href=<?php echo site_url('/customer/delete/'. $row->id) ?> class="a-link a-delete">删除</a>
								<a href=<?php echo site_url('/customer/edit/'. $row->id) ?> class="a-link">编辑</a>
								<a href=<?php echo site_url('/customer/detail/'. $row->id) ?> class="a-link">查看</a>
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