<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
use Yvesniyo\IntouchSms\SmsSimple;
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
?>