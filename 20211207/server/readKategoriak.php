<?php 
require_once 'db.php';
$sql="select * from kategoriak";
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>