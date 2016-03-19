<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form action="<?php echo site_url('/sale/add_save') ?>" method="post">
					<div class="form-group">
						<label for="">交易日期</label>
						<input name="sale_date" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">货物名称</label>
						<input name="goods_name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">交易数量</label>
						<input name="count" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">交易金额</label>
						<input name="total_price" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">供货方</label>
						<select name="join_company_id" class="form-control">
							<option value=""></option>
							<?php foreach ($joins->result() as $row): ?>
							<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">购买方</label>
						<select name="customer_company_id" class="form-control">
							<option value=""></option>
							<?php foreach ($customers->result() as $row): ?>
							<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">联系人名</label>
						<input name="link_name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">电话</label>
						<input name="link_tell" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">地址</label>
						<input name="address" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">备注</label>
						<textarea name="summary" class="form-textarea form-control"></textarea>
					</div>
					
					<div class="form-group text-center bw-mt">
						<button class="btn btn-success">保存</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>