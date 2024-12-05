<?php
$host = "localhost";
$user = 'root';
$base = 'gestion_parapharmacie';
$password='';

try{
    $con = new PDO("mysql:host=$host;dbname=$base",$user, $password);
}
catch(PDOException $err){
  echo "erreur :" .$err->getMessage();
}
?>