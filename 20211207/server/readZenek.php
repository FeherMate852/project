<?php 
require_once 'db.php';
if(isset($_GET['id'])){
    $sql="Select zenek.id, zenek.cim, zenek.ev, zenek.kategoria_id from zenek inner join kategoriak on zenek.kategoria_id = kategoriak.id where zenek.kategoria_id = {$_GET['id']}";
}else{
    $sql="Select zenek.id, zenek.cim, zenek.ev, zenek.kategoria_id from zenek";
}
$stmt=$db->query($sql);
echo json_encode($stmt->fetchAll());
?>