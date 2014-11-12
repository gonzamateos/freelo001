<?php /* Copyright PulseCMS.com. All rights reserved. */ ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $lang_page_title; ?></title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	
	<link rel="stylesheet" href="css/style.css" media="all" />
	<link rel="stylesheet" href="plugins/plupload/css/plupload.queue.css" media="all" />
	<link rel="stylesheet" href="plugins/redactor/css/redactor.css" />
	
	<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/redactor/redactor.min.js"></script>
	
	<script> function doMenu(item) { obj=document.getElementById(item); col=document.getElementById("x" + item); if (obj.style.display=="none") { obj.style.display="block"; col.innerHTML="<?php echo $lang_embed; ?>"; } else { obj.style.display="none"; col.innerHTML="<?php echo $lang_embed; ?>"; } } 
	</script>
	
	<script type="text/javascript">
		$(document).ready(
			function()
			{
				$('#redactor_content').redactor({ 
					imageUpload: 'includes/editor_images.php',
					imageGetJson: 'includes/data_json.php',
					fileUpload: 'includes/editor_files.php',
					lang: 'es',
					convertDivs: false
				});
			}
		);
	</script>
	
</head>
	
<body>	

<script type="text/javascript"> 
function select_all(obj) 
{ var text_val=eval(obj); 
text_val.select(); } 
</script>
		
<div id="sidebar">

<a href="index.php?p=blocks">
<img class="logo" src="img/logohead.png" alt="Pulse CMS" />
</a>

<ul>
	<li <?php if ($on=="blocks") echo 'class="on"' ?>><a href="index.php?p=blocks"><?php echo $lang_nav_blocks; ?></a></li>
	<li><a href="../cal/index.php?action=login">Calendario</a></li>
	<!-- <li <?php if ($on=="blog") echo 'class="on"' ?>><a href="index.php?p=manage-blog"><?php echo $lang_nav_blog; ?></a></li> -->
	<!--<li <?php if ($on=="images") echo 'class="on"' ?>><a href="index.php?p=manage-gallery"><?php echo $lang_nav_galleries; ?></a></li>-->
	<!-- <li <?php if ($on=="stats") echo 'class="on"' ?>><a href="index.php?p=stats"><?php echo $lang_nav_stats; ?></a></li> -->
	<!-- <li <?php if ($on=="form") echo 'class="on"' ?>><a href="index.php?p=manage-form"><?php echo $lang_nav_form; ?></a></li> -->
	<!-- <li <?php if ($on=="backup") echo 'class="on"' ?>><a href="index.php?p=list-backups"><?php echo $lang_nav_backup; ?></a></li> -->
	<!-- <li <?php if ($on=="settings") echo 'class="on"'; ?>><a href="index.php?p=settings"><?php echo $lang_nav_settings; ?></a></li> -->
	<li><a href="includes/logout.php"><?php echo $lang_nav_logout; ?></a></li>
</ul>

</div>