<?php
require_once "db.php";
$id = $_GET['id'];
$leiras = $_GET['leiras'];
//echo "Szerver oldalon OK! {$id}-{$leiras}";
$sql = "update zenek set leiras='{$leiras}' where id={$id}";
$stmt = $db->exec($sql);
if($stmt)
    echo "Sikeres Módosítás!";
else
    echo "Sikertelen Módosítás!";
?>