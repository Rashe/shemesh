<?php include_once('backend/func.php');
      include_once('content/content.php');

$body_class = get_body_class();



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title><?php echo $pageTitle ?> </title>
    <meta name="description" content="<?php  print $hed_array['meta_description'] ?>">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>

    <link rel="Shortcut Icon" type="image/x-icon" href="img/favicon.ico" />
    <link href="css/normalize.css" rel="stylesheet" type="text/css"/>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"
            charset="utf-8"></script>
    <script src="js/js.js"></script>
    <script type="text/javascript">
        var isIE11 = navigator.userAgent.match(/Trident\/7.0; rv 11.0/);
        if ((navigator.userAgent.indexOf('MSIE') !=-1)  || (isIE11 !=null))
        {
            // Using IE
            window.location = "https://www.google.com/intl/en/chrome/browser/"
        }
    </script>
</head>

<body class="<?php echo $body_class . $_SESSION['clicked'] ?>">
<!--facebook sdk-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=198389963562561";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<header>

    <nav>
        <ul class="top_list">
            <li class="top_menu"><a href="/" title="Home - Shemesh.info">Home</a></li>
            <li class="top_menu"><a href="/orientation.php" title="Tests, there is only one for now">Tests</a></li>
            <li class="top_menu"><a href="#" title="Quests">Quests (soon)</a></li>
            <li class="top_menu"><a href="#" title="About">About (soon)</a></li>
            <li class="nav_image"> <img src="img/cat.jpg"/></li>
        </ul>
        <span class="nav_text">Navigation</span>
    </nav>


<!--    <div class="share">-->
<!--        <div class="social_wrap">-->
<!--        <div class="g-plusone" data-size="medium" data-annotation="none"></div>-->
<!--        <div class="fb-like" data-href="http://shemesh.info" data-width="80" data-layout="button_count" data-show-faces="true" data-send="false"></div>-->
<!--        </div>-->
<!--    </div>-->

</header>