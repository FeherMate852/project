<?php 
require_once 'db.php';
if(isset($_GET['id'])){
    $sql = "delete from zenek where id={$_GET['id']}";
    $stmt = $db -> exec($sql);
    if($stmt){
        echo "Sikeres törlés!";
    }else echo "Sikertelen törlés!";
}
?>