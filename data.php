<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require 'php-includes/connect.php';
if(isset($_POST['egg'])){
    $query = "SELECT * FROM akazu ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $total=$rows['total'];
    $total=$total+1;
    $sql ="INSERT INTO akazu (farmer,debit,credit,total) VALUES ('1','1','0',?)";
    $stm = $db->prepare($sql);
    $stm->execute(array($total));
}
?>