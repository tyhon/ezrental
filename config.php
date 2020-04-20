<?php

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require __DIR__ . '/vendor/autoload.php';

// API
$api = new ApiContext(
    new OAuthTokenCredential(
        'AQAyNZacLaMQhRSkXUKd7uoNyaLjJDlliGr-VRwCp40gu7ZyfN7BYCCdC7iH2UQjTG5I7YHKjKUg5xWK',
        'EDG1TWiLYtMYqTxfAuyTFEqwW-vm-V0q35ggRu1IcY96DJltgcxd3X9wLlh68iB8VR9lM2Ojl35QDpm6'
    )
);

$api->setConfig(array(
    'mode' => 'sandbox',
    'log.LogEnabled' => true,
    'log.FileName' => 'logs.log',
    'log.LogLevel' => 'DEBUG',
));

?>