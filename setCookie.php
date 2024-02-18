<?php
session_start();

$getdata = $_POST;

// setcookie("email" ,$getdata['email']  , time()+(120*60)+(60*60));
// setcookie("password" , $getdata['password'] , time()+(120*60)+(60*60));
// setcookie("name" , $getdata['name'] , time()+(120*60)+(60*60));

$_SESSION['email'] = $getdata['email'] ;
$_SESSION['password'] = $getdata['password'] ;
$_SESSION['name'] = $getdata['name'] ;



header("Location: login.html");
exit;

// setcookie("test1", true , time()+(120*60)+(60*60), "/task%202/cookie/cookie.php");