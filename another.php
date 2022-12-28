<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require 'php-includes/connect.php';
use Yvesniyo\IntouchSms\SmsSimple;
if(isset($_REQUEST['egg'])){
    $query = "SELECT * FROM akazu ORDER BY id DESC limit 1";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    $total=$rows['total'];
    $total=$total+1;
    $sql ="INSERT INTO akazu (farmer,debit,credit,total) VALUES ('1','1','0',?)";
    $stm = $db->prepare($sql);
    $stm->execute(array($total));
    include_once("vendor/autoload.php");
    /** @var \Yvesniyo\IntouchSms\SmsSimple */
    $messi="New egg detected";
    $sms = new SmsSimple();
    $sms->recipients(["0788925552"])
        ->message($messi)
        ->sender("+250780743236")
        ->username("rwakayiru")
        ->password("rwakayiru123")
        ->apiUrl("www.intouchsms.co.rw/api/sendsms/.json")
        ->callBackUrl("");
    print_r($sms->send());
}
?>
