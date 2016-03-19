<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form action="<?php echo site_url('/customer/add_save') ?>" method="post">
					<div class="form-group">
						<label for="">公司名称</label>
						<input name="name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">联系人名</label>
						<input name="link_name" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">性别</label>
						<select name="link_sex" class="form-control">
							<option value="未知">未知</option>
							<option value="男">男</option>
							<option value="女">女</option>
						</select>
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
						<label for="">关联我的公司</label>
						<select name="link_join_id" class="form-control">
							<option value=""></option>
							<?php foreach ($joins->result() as $row): ?>
							<option value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">状态</label>
						<select name="status" class="form-control">
							<option value=""></option>
							<option value="激活">激活</option>
							<option value="冻结">冻结</option>
						</select>
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