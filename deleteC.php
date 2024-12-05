<?php
    include "connection.php";
    $sql=$con->prepare("delete from client where id_client=:idc");
    $sql->bindparam(':idc',$id_client);
    if($sql->execute()){
        echo "erreur";
    }else{
        echo "valider";
    }

?>