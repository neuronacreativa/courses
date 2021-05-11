<?php

include "ServiceContainerInterface.php";

// $serviceContainer is an instance of ServiceContainerInterface
$mailer = $serviceContainer->get('mailer');
