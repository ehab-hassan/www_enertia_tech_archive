<?php
require '../vendor/autoload.php';
error_reporting(E_ALL);
ini_set("display_errors", 1);

$params = array(
    'credentials' => array(
        'key' => 'AKIAJT3XNAKJXK6TDCFA',
        'secret' => 'KZmO9RwyoQC/7QhguIM20VxP+AqjC73amqJpwjo7',
    ),
    'region' => 'us-east-1', // < your aws from SNS Topic region
    'version' => 'latest'
);
$sns = new \Aws\Sns\SnsClient($params);

$args = array(
    "MessageAttributes" => [
                'AWS.SNS.SMS.SenderID' => [
                    'DataType' => 'String',
                    'StringValue' => 'enertia'
                ],
                'AWS.SNS.SMS.SMSType' => [
                    'DataType' => 'String',
                    'StringValue' => 'Transactional'
                ]
            ],
    "Message" => "Welcome to ENERTIA, Your Login Code : 2652",
    "PhoneNumber" => "971553157060"
);


$result = $sns->publish($args);
// Response
echo "<pre>";
var_dump($result);
echo "</pre>";
?>
