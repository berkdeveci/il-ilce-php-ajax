<?php
include ("db.php");
$getir = @$_POST["action"];

switch ($getir){
    case "il":
        $db=new db();
        return $db->getIlList();
        break;

    case "ilce":
        $db=new db();
        $il=$_POST["name"];
        return $db->getIlceList($il);
        break;
}
?>