<?php
$phone = $_POST['phoneNumber'];
$text = $_POST['text'];
//Check if user input is 98 and return to main menu
if (strrpos($text, "*98") != false) {
    $pos = strrpos($text, "*98") + 4;
    $text = substr($text, $pos);
}
$data = explode("*", $text);
if ($text == "") {
    $menu = "CONBuild mental and spiritual stamina and get ahead.\n1. Daily Inspiration\n2. Daily Devotion\n3. Unsubscribe";
} else if ($data[0] == "1") {
    if (sizeof($data) == 1)
    {
        $menu = "CONSubscribe to daily inspirational messages @ 5/- per sms.\n1. Accept\n2. Cancel\n98. Main Menu";
    } elseif (sizeof($data) == 2 and $data[1] == "1")//3*1
    {
        $menu = "CONYou have opted to subscribe to daily inspiration.\n1. Proceed\n2. Cancel";
    } elseif (sizeof($data) == 2 and $data[1] == "2")//3*2
    {
        die();
    } elseif (sizeof($data) == 3 and $data[1] == "1" and $data[2] == "1")//1*1*1
    {
        $menu = "ENDYou have successfully subscribed to daily inspiration.";
    } elseif (sizeof($data) == 3 and $data[1] == "1" and $data[2] == "2")//1*1*2
    {
        die();
    } else {
        $menu = "ENDInvalid Choice. Try Again";
    }
}  else if ($data[0] == "2") {
    if (sizeof($data) == 1)
    {
        $menu = "CONSubscribe to daily Devotional messages @ 5/- per sms.\n1. Accept\n2. Cancel\n98. Main Menu";
    } elseif (sizeof($data) == 2 and $data[1] == "1")//3*1
    {
        $menu = "CONYou have opted to subscribe to daily Devotional messages.\n1. Proceed\n2. Cancel";
    } elseif (sizeof($data) == 2 and $data[1] == "2")//3*2
    {
        die();
    } elseif (sizeof($data) == 3 and $data[1] == "1" and $data[2] == "1")//1*1*1
    {
        $menu = "ENDYou have successfully subscribed to daily Devotional messages.";
    } elseif (sizeof($data) == 3 and $data[1] == "1" and $data[2] == "2")//1*1*2
    {
        die();
    } else {
        $menu = "ENDInvalid Choice. Try Again";
    }
}else if ($data[0] == "3") {
    if (sizeof($data) == 1)
    {
        $menu = "CONSelect Content to unsubscribe from.\n1. Daily Inspiration\n2. Daily Devotion\n98. Main Menu";
    } elseif (sizeof($data) == 2 and $data[1] == "1")//3*1
    {
        $menu = "CONYou have selected to unsubscribe from daily inspiration.\n1. Proceed\n2. Cancel";
    } elseif (sizeof($data) == 2 and $data[1] == "2")//3*2
    {
        $menu = "CONYou have selected to unsubscribe from daily Devotion.\n1. Proceed\n2. Cancel";
    } elseif (sizeof($data) == 3 and $data[1] == "1" and $data[2] == "1")//3*2*1
    {
        $menu = "ENDYou have successfully unsubscribed to daily inspiration.";
    } elseif (sizeof($data) == 3 and $data[1] == "2" and $data[2] == "1")//3*2*1
    {
        $menu = "ENDYou have successfully unsubscribed to daily inspiration.";
    } else {
        $menu = "ENDInvalid Choice. Try Again";
    }
}
else {
    $menu = "ENDInvalid Choice. Try Again";
}
header("Content-Type:text/plain");
echo $menu;
