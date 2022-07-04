<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51LC2UzKQwEXwzDf9jODJqQcCB70X3vAl4bgE8AmxDohoRWQHVpfzsrYWGhKL9Me8VVyBGbhTOaqrJXZ86dOfxBBK00coGB8yFv";

$secretKey="sk_test_51LC2UzKQwEXwzDf91tXcCWv6AfYo72LeEM9YqQdD5mowvfBIhiUI3LgNfxxRMDA3UtE00R3BEDoyFvbGshPgNmKS00DJW35CRB";

\Stripe\Stripe::setApiKey($secretKey);
?>