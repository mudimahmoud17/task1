<?php

$checkdata = $_COOKIE ;

$getdata = $_POST ;

// if($_POST['email'] == $_COOKIE['email'] && $_POST['password'] == $_COOKIE['password']){
//     echo "Hello " . $_POST['email'];
// }

// else {
//     echo "invalid email or password <br>";
// }


session_start();

if($_POST['email'] == $_SESSION['email'] && $_POST['password'] == $_SESSION['password']){
    echo "Hello " . $_POST['email'];
}

else {
    echo "invalid email or password <br>";
}

