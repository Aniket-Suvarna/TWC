<?php
$keyId = 'rzp_test_rIZ1IUrWOEUSdD';
$keySecret = 'nEg65Dl97gUIuI4lB33lDbpf';
use Razorpay\Api\Api;
$api = new Api($keyId, $keySecret);

$api->invoice->create(array (
    'type' => 'invoice',
    'description'=> 'Invoice For Order',
    'customer'=>array(array(
        'name'=> 'Aniket',
        'contact'=> '9876543210',
        'email'=> 'aniket1463@gmail.com'
    )),
    'line_items'=>array(array(
        'name'=> 'Together We Create',
        'amount'=>500,
        'currency'=> 'INR',

    
    )),
    'sms_notify'=> 1,
    'email_notify'=> 1,
    'comment'=> 'Please Visit Again',

));
