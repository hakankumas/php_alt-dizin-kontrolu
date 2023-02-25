<?php
session_start();

if(!isset($_SESSION["oturum"])){
    header("location: index.php");
}
$host = 'localhost';
$database_username = 'root';
$database_password = '';
$database_name = "veritabani";
$message = "";

try{
    $connect = new PDO("mysql:host=$host; dbname=$database_name", $database_username, $database_password);
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->exec("SET NAMES 'utf8'; SET CHARSET 'utf8'");
    
}catch(PDOException $error){
    $message = $error->getMessage();
}
?>
