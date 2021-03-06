<?php

include 'TriangleCRM/Autoloader.php';

use TriangleCRM\Controller as api;

$controller = new Controller("boostrap");

$settings = $controller->GetModel("orderBootstrap");  
$requiredJson = $controller->GetModel('ccFormRequired');
$required = json_decode($requiredJson);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Dermarose&reg; Skin Revitalized - Secure Order</title>
        <meta charset="UTF-8">
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="favicon.ico" />
        <link type="text/css" rel="stylesheet" href="css/index.css"/>
        <link type="text/css" rel="stylesheet" href="css/jNotify.jquery.css"/>
    </head>
    <body>
            <?php include_once('templates/offers/offer.html'); ?>
            <div class="wrapper">
                <?php include_once('templates/headers/header.html'); ?>
                <?php include_once('templates/contents/order.php'); ?>
                <?php include_once('templates/footers/footer.html'); ?>
            </div>
        <!-- Scripts -->
        <script>
            var orderSettings = <?php echo $settings; ?>;
            var orderShowEl = <?php echo $requiredJson; ?>;
            var downSell = indexSettings.Result.downSell;// redirect
            var pageId = 2;
        </script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.cookie.js"></script>
        <script type="text/javascript" src='js/jNotify.jquery.min.js'></script>
        <script src='js/jquery.validate.min.js'></script>
        <script type="text/javascript" src="js/billing/jsbn.js"></script>
        <script type="text/javascript" src="js/billing/rsa.js"></script>
        <script type="text/javascript" src="js/exit.js"></script>
        <script type="text/javascript" src='js/global.js'></script>
        <script type="text/javascript" src='js/scripts.js'></script>
    </body>
</html>
