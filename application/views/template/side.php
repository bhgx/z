<div class="aside" id="aside">
	<?php if($this->session->userdata('avatar')): ?>
	<div class="user-wrap">
		<img src="<?php echo $this->session->userdata('avatar') ?>" alt="" class="user">
	</div>
	<?php else: ?>
	<img src="<?php echo base_url('application/resource/app/images/ewm.png') ?>" alt="" class="ewm">
	<?php endif ?>
	<div class="side-nav">
		<h2><span></span>名&nbsp;&nbsp;站</h2>
		<div class="side-line"></div>
		<a target="_blank" href="https://wx.qq.com/">微信网页版</a>
		<div class="side-line"></div>
		<a target="_blank" href="http://yun.baidu.com/">百度网盘</a>
		<div class="side-line"></div>
		<a target="_blank" href="http://icomoon.io/">IcoMoon</a>
		<div class="side-line"></div>
		<a target="_blank" href="http://css3lib.alloyteam.com/">CSS3 UI Lib</a>
		<div class="side-line"></div>
		<a target="_blank" href="http://www.w3cfuns.com/tools.php">W3Cfuns</a>
		<div class="side-line"></div>
		<a target="_blank" class="a-last" href="http://bbs.blueidea.com/forum.php">Blueidea</a>
	</div>
</div>