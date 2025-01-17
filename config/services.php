<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set('env(database_driver)', 'pdo_mysql');

    $parameters->set('env(database_host)', '127.0.0.1');

    $parameters->set('env(database_port)', '3306');

    $parameters->set('env(database_name)', 'solidinvoice');

    $parameters->set('env(database_user)', 'root');

    $parameters->set('env(database_password)', null);

    $parameters->set('env(database_version)', '1.0');

    $parameters->set('env(mailer_transport)', 'sendmail');

    $parameters->set('env(mailer_host)', '127.0.0.1');

    $parameters->set('env(mailer_user)', null);

    $parameters->set('env(mailer_password)', null);

    $parameters->set('env(mailer_port)', null);

    $parameters->set('env(mailer_encryption)', null);

    $parameters->set('env(locale)', 'en_US');

    $parameters->set('env(secret)', 'SecretToken');

    $parameters->set('env(installed)', null);

    $parameters->set('env(SOLIDINVOICE_ALLOW_REGISTRATION)', '0');
};
