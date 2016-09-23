<?php $currver="0.6.7"; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="css/preload.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php /* <link rel="stylesheet" type="text/css" href="css/ui-lightness/jquery-ui-1.8.4.custom.css"> */ ?>
<link rel="stylesheet" type="text/css" href="css/ui-saw/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="css/ui-saw/jquery-ui.structure.min.css">
<link rel="stylesheet" type="text/css" href="css/widgets_headers.css">
<link href="http://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/ico/os.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="SaW WebOS v<?php echo $currver; ?>">
<meta name="author" content="Sikke -A- Werkhoven">
<?php /* Core JS: */ ?>
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="scripts/modernizr.custom.js"></script>
<script type="text/javascript" src="scripts/imagesloaded.pkgd.min.js"></script>
<?php /* <script type="text/javascript" src="scripts/video.js"></script>  */ ?>
<?php /* <script type="text/javascript" src="scripts/bigvideo.js"></script>  */ ?>
<script type="text/javascript" src="scripts/os.js"></script>
<script type="text/javascript" src="scripts/widgets.js"></script>
<script type="text/javascript" src="scripts/norclick.js"></script>
<?php /* Widget-Specific JS: */ ?>
<script type="text/javascript" src="scripts/jquery.cycle2mapfix.min.js"></script>
<script type="text/javascript" src="scripts/jquery.simpleWeather.min.js"></script>
<script type="text/javascript" src="scripts/coolclock.js"></script>
<script type="text/javascript" src="scripts/moreskins.js"></script>
<?php /* <script type="text/javascript" src="scripts/warnleave.js"></script> */ ?>
<script type="text/javascript" src="scripts/preload.js"></script>
<title>SaW WebOS - v<?php echo $currver; ?></title>
</head>
<div id="sawpreloader"></div><div id="sawpreloaderstatus"><div class="circle"></div><div class="circle1"></div><div class="circle2"></div></div>
<body>
<?php /* # Disable the below in case of video playback: */ ?>
<div id="backdrops" unselectable="on" onselectstart="return false;"><img src="images/desktop/bg-image.jpg" class="bgM" />
<img src='images/desktop/bg-image3.jpg' class='bgM'/><img src="images/desktop/3.jpg" class="bgM" /><img src='images/desktop/10.jpg' class='bgM'/>
<img src='images/desktop/12.jpg' class='bgM'/><img src='images/desktop/14.jpg' class='bgM'/><img src="images/desktop/4.jpg" class="bgM" />
<img src="images/desktop/2.jpg" class="bgM" /></div>
<?php /* # Disable the above in case of video playback. See scripts/os.js */ ?>
<div id="wrapper" class="bgfadein" unselectable="on" onselectstart="return false;">
<div id="windows">&nbsp;</div>
<?php /* Desktop Components: */ ?>
<?php include("includes/widgets.php"); ?>
<?php include("includes/shortcuts.php"); ?>
<div id="footer"></div>
</div>
</body>
</html>
