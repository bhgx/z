<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="content-ri">
				<div class="rtop">
					<div class="search-wrap">
						<form class="form-inline">
							<div class="form-group">
								<input type="text" class="form-control"  placeholder="公司名">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="联系人名">
							</div>
							<button type="submit" class="btn btn-default">查询</button>
						</form>
					</div>
					<a href="<?php echo site_url('/sale/add') ?>" class="btn btn-success pull-right">添加</a>
				</div>
				<table class="customer-table">
					<thead>
						<tr>
							<th width="10%">日期</th>
							<th width="10%">商品</th>
							<th width="10%">数量</th>
							<th width="10%">总价</th>
							<th width="10%">购买方</th>
							<th width="10%">购买方人员</th>
							<th width="10%">购买方电话</th>
							<th width="10%">供货方</th>
							<th width="10%">交易地址</th>
							<th width="10%">操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>2013-02-04</td>
							<td>俣成塑料</td>
							<td>5t</td>
							<td>12.8万</td>
							<td>共致开源软件有限公司</td>
							<td>老秦</td>
							<td>18301075531</td>
							<td>素果互动北京有限公司</td>
							<td>北京市海淀区学院路</td>
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