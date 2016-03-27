<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form id="form" action="<?php echo site_url('/customer/edit_save/'.$item['id']) ?>" method="post">
					<div class="form-group">
						<label for="">客户公司名称<i class="nessary">*</i></label>
						<input name="name" id="name" value="<?php echo $item['name'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">联系人名</label>
						<input name="link_name" value="<?php echo $item['link_name'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">联系人电话</label>
						<input name="link_tell" value="<?php echo $item['link_tell'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">联系人性别</label>
						<select name="link_sex" class="form-control">
							<option <?php add_selected($item['link_sex'],'') ?> value=""></option>
							<option <?php add_selected($item['link_sex'],'男') ?> value="男">男</option>
							<option <?php add_selected($item['link_sex'],'女') ?> value="女">女</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">地址</label>
						<input name="address" value="<?php echo $item['address'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">关联我的公司</label>
						<select name="link_join_id" class="form-control">
							<option value="">无</option>
							<?php foreach ($joins->result() as $row): ?>
							<option <?php add_selected($item['link_join_id'], $row->id) ?>  value="<?php echo $row->id ?>"><?php echo $row->name ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="form-group">
						<label for="">状态</label>
						<select name="status" class="form-control">
							<option <?php add_selected($item['status'],'') ?> value=""></option>
							<option <?php add_selected($item['status'],'激活') ?> value="激活">激活</option>
							<option <?php add_selected($item['status'],'冻结') ?> value="冻结">冻结</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">备注</label>
						<textarea name="summary" class="form-textarea form-control"><?php echo $item['summary'] ?></textarea>
					</div>
					<div class="form-group text-center">
						<button id="save" class="btn btn-success">保存</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="footer"></div>
<?php $this->load->view('template/scripts'); ?>
<script type="text/javascript">
	$(function(){
		valid({
			submitId: 'save',
			formId: 'form',
			inputArray: ['name']
		});
	});
</script>