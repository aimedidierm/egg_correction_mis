<?php
use Yvesniyo\IntouchSms\SmsSimple;
    /** @var \Yvesniyo\IntouchSms\SmsSimple */
    $messi="Dear customer you have bought ".$mass."Kg of ".$productname." you have paid ".$amount." Rwf you left with ".$left." Rwf, Thank you!";
    $sms = new SmsSimple();
    $sms->recipients([$phone])
        ->message($messi)
        ->sender("+250780496238")
        ->username("rwakayiru")
        ->password("rwakayiru123")
        ->apiUrl("www.intouchsms.co.rw/api/sendsms/.json")
        ->callBackUrl("");
    print_r($sms->send());
?>