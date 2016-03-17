<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix row">
		<?php $this->load->view('template/side') ?>
		<div class="col-sm-8 add-wrap">
			<form action="" type="post">
				<div class="form-group">
					<label for="">公司名称</label>
					<input name="name" type="text" class="form-control">
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
					<label for="">关联我的公司</label>
					<select name="" id="" class="form-control"></select>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-success">保存</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>