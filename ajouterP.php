<?php
require "connection.php";
if(isset($_POST["ajouterP"])){
    $n=$_POST["nom"];
    $p=$_POST["prix"];
    $tP=$_POST["typeP"];
    $s=$_POST["stock"];
    $dPd=$_POST["datePd"];
    $dPm=$_POST["datePm"];

$req="insert into produit(nom,prix,typeP,stock,datePd,datePm) values('$n','$p','$tP','$s','$dPd','$dPm')";
$con->query($req);
echo "<script>window.location.href='produit.php'</script>";
}
?>