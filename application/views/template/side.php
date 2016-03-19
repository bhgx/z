<div class="aside">
	<?php if($this->session->userdata('role') > 1): ?>
	<img src="<?php echo $this->session->userdata('avatar') ?>" alt="" class="user">
	<?php else: ?>
	<img src="<?php echo $this->session->userdata('avatar') ?>" alt="" class="ewm">
	<?php endif ?>
	<div class="side-nav">
	<h2><span></span>名&nbsp;&nbsp;站</h2>
		<a target="_blank" href="http://www.oschina.net/">开源中国社区</a>
		<a target="_blank" href="https://developer.mozilla.org/zh-CN/docs/Mozilla_event_reference">Mozilla Events</a>
		<a target="_blank" href="http://icomoon.io/">IcoMoon</a>
		<a target="_blank" href="http://css3lib.alloyteam.com/">CSS3 UI Lib</a>
		<a target="_blank" href="http://www.w3cfuns.com/tools.php">W3Cfuns</a>
		<a target="_blank" class="a-last" href="http://bbs.blueidea.com/forum.php">Blueidea</a>
	</div>
</div>