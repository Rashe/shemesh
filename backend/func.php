<?php
$title;

//body class
 function get_body_class()
{
    $page_url = basename($_SERVER['PHP_SELF']);
    $body_class = preg_replace('/\.(.*)/', '', $page_url);
    return $body_class;
}


//Sessions
//session_start();
//$_SESSION['clicked'] = $_POST['shit'];
//if ($_SESSION['clicked'] < 4)
//{
//    $click_message = '';
//}
//else{
//    $click_message = "You've clicked it 4 times already oO";
//}