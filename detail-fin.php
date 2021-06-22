<?php
include 'main-fin.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	.hs-responsive-embed-youtube {
		position: relative;
		padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
		padding-top: 25px;
	}
	.hs-responsive-embed-youtube iframe {
		position: absolute;
		width: 100%!important;
		height: 100%!important;
	}
</style>
<div class="hs-responsive-embed-youtube"><iframe src="<?php print_r($film[$_GET['key']]['trailer']);?>" frameborder="0" allowfullscreen=""></iframe></div>
</body>
</html>