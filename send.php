<?php
include "bootstrap.php";

$cEchoer = new Echoer();

$cEchoer->addRecipient('Pervij');
$cEchoer->addRecipient('Vtoroj');
$cEchoer->addRecipient('Tretij');

$cEchoer->sayMessage('This message has been sent to 3 recipients');