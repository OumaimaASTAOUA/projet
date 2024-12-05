<?php
require "connection.php";
if(isset($_POST["ajouterU"])){
    $n=$_POST["nom"];
    $em=$_POST["email"];
    $ad=$_POST["adress"];
    $ph=$_POST["phone"];
$req="UPDATE client SET  id_client=:'" . $_POST["id_client"]."' (nom,email,adress,phone) values('$n','$em','$ad','$ph')";
$con->query($req);
echo "<script>window.location.href='client.php'</script>";
}
?>
