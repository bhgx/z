<?php $this->load->view('template/header') ?>
<div class="content">
	<div class="clearfix">
		<?php $this->load->view('template/side') ?>
		<div class="content-r">
			<div class="add-wrap">
				<form id="form" action="<?php echo site_url('/join/edit_save/'.$item['id']) ?>" method="post">
					<div class="form-group">
						<label for="">公司名称<i class="nessary">*</i></label>
						<input name="name" id="name" value="<?php echo $item['name'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">联系人名</label>
						<input name="link_name" value="<?php echo $item['link_name'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">电话</label>
						<input name="link_tell" value="<?php echo $item['link_tell'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">地址</label>
						<input name="address" value="<?php echo $item['address'] ?>" type="text" class="form-control">
					</div>
					<div class="form-group">
						<label for="">状态</label>
						<select name="status" class="form-control">
							<option <?php add_selected($item['status'],'在职') ?> value="在职">在职</option>
							<option <?php add_selected($item['status'],'离职') ?> value="离职">离职</option>
							<option <?php add_selected($item['status'],'待入职') ?> value="待入职">待入职</option>
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