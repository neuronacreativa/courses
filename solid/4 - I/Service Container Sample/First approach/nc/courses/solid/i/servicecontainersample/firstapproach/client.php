<?php
namespace nc\courses\solid\i\servicecontainersample\firstapproach;

include "ServiceContainerInterface.php";

$serviceContainer = new ServiceContainer();
$mailer = $serviceContainer->get('mailer');
echo $mailer->getName();
