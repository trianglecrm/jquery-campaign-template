<!DOCTYPE html>
<html lang="">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type="text/css" rel="stylesheet" href="css/index.css"/>
		<link rel="shortcut icon" href="favicon.ico" />
	</head>
	<body>
            <script>
                var downSell = getUrlVars()['successDownSell'];
                var pageId = 3;
            </script>
		<div class="wrapper">
			<?php include_once('templates/headers/header.html'); ?>
                        <?php include_once('templates/contents/step2-success.php'); ?>
                        <?php include_once('templates/footers/footer.html'); ?>
		</div>
	</body>
</html>