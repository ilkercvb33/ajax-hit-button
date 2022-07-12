<?php

require("mysql.php");

if($_POST){
    $id    =  1;

    $query = $db->prepare("update tablom set hit = hit+1 where id = ?");
    $query->execute([$id]);
}
?>