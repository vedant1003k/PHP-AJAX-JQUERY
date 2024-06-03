<?php
$name = $_GET['myName'];
$mobile = $_GET['myMobile'];
if(setcookie("myName", $name, time() + 60)){
    echo "cookie".$name."set";
}
echo "<br>";
if(setcookie("myMobile", $mobile, time() + 60)){
    echo "cookie".$mobile."set";
}

// echo $_COOKIE['myName'];
// echo "<br>";
// echo $_COOKIE['myMobile'];
?>