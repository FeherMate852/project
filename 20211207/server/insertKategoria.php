<?php
require_once "db.php";
$nev=$_GET['nev'];
echo "szerver oldalon megvan az adat:".$nev;
$sql="insert into kategoriak values (null,'{$nev}')";
$stmt=$db->exec($sql);
echo $stmt;
?>