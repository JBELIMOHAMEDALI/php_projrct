<?php
$servername="localhost";
$dbname="db_dev2";
$username="root";
$password="";
try{
$db=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
// echo"sucess connexion";
}catch (PDOexception $e) {
// echo"not connected"+$e->getMessage();
die();}
?>