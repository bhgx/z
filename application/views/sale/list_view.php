<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="content-ri">
				<div class="rtop">
					<div class="search-wrap">
						<form class="form-inline" action="<?php echo site_url('/sale/lists') ?>" method="post">
							<input name="sale_date" value="<?php echo $this->input->post('sale_date') ?>" type="text" class="form-control bg-f" readonly onclick="WdatePicker()"  placeholder="交易日期">
							<select name="customer_company_id" class="form-control">
								<option value="">客户</option>
								<?php foreach ($customers->result() as $row): ?>
								<option <?php add_selected($this->input->post('customer_company_id'), $row->id) ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
								<?php endforeach ?>
							</select>
							<select name="join_company_id" class="form-control">
								<option value="">供货方</option>
								<?php foreach ($joins->result() as $row): ?>
								<option <?php add_selected($this->input->post('join_company_id'), $row->id) ?> value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
								<?php endforeach ?>
							</select>
							<input name="goods_name" value="<?php echo $this->input->post('goods_name') ?>" type="text" class="form-control" placeholder="商品名">
							<button type="submit" class="btn btn-default">查询</button>
						</form>
					</div>
					<a href="<?php echo site_url('/sale/add') ?>" class="btn btn-success pull-right">添加</a>
				</div>
				<table class="customer-table">
					<thead>
						<tr>
							<th width="10%">交易日期</th>
							<th width="10%">商品名</th>
							<th width="10%">数量</th>
							<th width="10%">总价</th>
							<th width="10%">购买方</th>
							<th width="10%">购买方联系人</th>
							<th width="10%">购买方电话</th>
							<th width="10%">供货方</th>
							<th width="10%">交易地址</th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($query->result() as $row): ?>
							<tr>
							<td><?php echo $row->sale_date; ?></td>
							<td><?php echo $row->goods_name; ?></td>
							<td><?php echo $row->count; ?></td>
							<td><?php echo $row->total_price; ?></td>
							<td><?php echo $row->customer_company_name; ?></td>
							<td><?php echo $row->link_name; ?></td>
							<td><?php echo $row->link_tell; ?></td>
							<td><?php echo $row->address; ?></td>
							<td><?php echo $row->join_company_name; ?></td>
							<td>
								<a onclick="return confirm('确定要删除该公司么？');" href=<?php echo site_url('/sale/delete/'. $row->id) ?> class="a-link a-delete">删除</a>
								<a href=<?php echo site_url('/sale/edit/'. $row->id) ?> class="a-link">编辑</a>
								<a href=<?php echo site_url('/sale/detail/'. $row->id) ?> class="a-link">查看</a>
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
