<?php

use core\func;

$name   ="";
$email   ="";

// func::dd($_SERVER);

if(isset($_GET["name"])){
    var_dump($_GET);
    $name = $_GET['name'];
    $email = $_GET['email'];


}
if(isset($_POST["name"])){
    echo "true post";
    $name = $_POST['name'];
    $email = $_POST['email'];

}
$title  = "Notes=> 🐬";
require "../view/Note.php";