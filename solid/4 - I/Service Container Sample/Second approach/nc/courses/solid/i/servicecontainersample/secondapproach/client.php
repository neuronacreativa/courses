<?php

include "ServiceContainerInterface.php";

// $serviceContainer is an instance of ServiceContainerInterface
$mailer = $serviceContainer->get('mailer');

// $serviceContainer is an instance of ServiceContainerInterface
// configure the mailer service
$serviceContainer->set(
    'mailer',
    function () use ($serviceContainer) {
        return new Mailer(
            // a mailer needs a transport
            $serviceContainer->get('mailer.transport')
        );
    }
);

// configure the mailer transport service
$serviceContainer->set(
    'mailer.transport',
    function () use ($serviceContainer) {
        return new MailerSmtpTransport();
    }
);