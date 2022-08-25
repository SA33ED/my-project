<?php 
$project_name="Furniture | FOF";
$project_logo="img/logo.png";
$conn=mysqli_connect('localhost','root','','fof'); //databaseName
include "functions/all.php";
session_start();
echo $_SERVER["REQUEST_URI"];
$x="/my-project/";
$y="/my-project/main/sign-up.php";
if($_SERVER["REQUEST_URI"] != $x && $_SERVER["REQUEST_URI"] != $y){
    if(!isset($_SESSION["username"])){
      header("Location:sign-up.php");
    }
  }
?>