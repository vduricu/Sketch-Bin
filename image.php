<?php
session_start();
require_once('engine/master.php');

$filename = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);

if(!getElementByField("draws","filename",$filename,'id'))
	masterDie(langItem("itemNotExists").'<br /><a href="./">Home</a>');

$image = "files.php?id={$filename}";
$path = getConfig('path');
$title = getElementByField("draws","filename",$filename,'title');
$bkgColor = getElementByField("draws","filename",$filename,'bkgcolor');
$deafult_width = getElementByField("draws","filename",$filename,'width');
$deafult_height = getElementByField("draws","filename",$filename,'height');

if(getElementByField("draws","filename",$filename,'type')=='extended')
	if($bkgColor!='none')
		$image .= "&extended=1";

?>
<!DOCTYPE html>
<html lang="ro-RO">
	<head>
		<title>
		<?php __($title." &raquo; ");?><?php __($spkcore->getConfig('title'))?>
		</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="<?php __($spkcore->getConfig('keywords'))?>" />
	<meta name="description" content="<?php __($spkcore->getConfig('description'))?>" />
	<meta name="author" content="Copyright 2011 (c) Duricu Valentin" />
	<meta name="Generator" content="Spark Sketch v<?php __($spkcore->version('number'))?>"/>

		<meta name="rating" content="general" />
		<meta name="robots" content="all,follow" />

		<script src="style/jquery.js" type="text/javascript"></script>
		<script src="style/jquery.tipsy.js" type="text/javascript"></script>
		<link href="style/jquery.tipsy.css" rel="stylesheet" type="text/css" />

		<link href="style/style.css" rel="stylesheet" type="text/css" />
		<link href="style/ui/ui.css" rel="stylesheet" type="text/css" />

		<link rel="shortcut icon" href="style/images/favicon.ico" type="image/x-icon" />
	<link rel="image_src" href="http://<?php __($_SERVER['HTTP_HOST'])?><?php __($image)?>" / >

		<style type="text/css">
.image{
	width: <?php __($deafult_width)?>px;
}
<?php if($bkgColor=='none'){?>.image .icontent{background: #ffffff url('style/images/bkg.png');}<?php }
elseif($bkgColor=='axis'){?>.image .icontent{background: #ffffff url('style/images/axis.png') center center;}<?php }
else{?>.image .icontent{background: <?php __($bkgColor)?>;}<?php }?>
		</style>
	</head>
	<body>
		<div class="image">
			<div class="title"><?php __($title)?></div>
			<div class="url"><input type="text" readonly class="inurl" value="http://<?php __($_SERVER['HTTP_HOST']."{$path}/image.php?id=".$filename)?>"/></div>
			<div class="tools">
				<ul>
					<li><a href="index.php?type=edit&id=<?php __($filename)?>" title="<?php ___("edit")?>"><img src="style/images/edit.png" alt="edit" /></a></li>
					<li><a href="files.php?id=<?php __($filename)?>&dl=1" title="<?php ___("download")?>"><img src="style/images/download.png" alt="dl" /></a></li>
				</ul>
				<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=thg2oo6"></script>
<!-- AddThis Button END -->
<!-- AddThis Button END -->
				<p class="clear"></p>
			</div>
			<div class="icontent">
				<img src="<?php __($image)?>" alt="image" title="<?php __($title)?>"/>
			</div>
		</div>
	</body>
</html>

<?php
ob_end_flush();
?>