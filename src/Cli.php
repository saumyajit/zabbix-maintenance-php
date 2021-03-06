<?php

namespace Berriart\Zabbix\Maintenance;

use Berriart\Zabbix\Maintenance\Command\OnCommand;
use Berriart\Zabbix\Maintenance\Command\OffCommand;
use Symfony\Component\Console\Application;

class Cli
{
    public static function init($name, $version)
    {
        $application = new Application($name, $version);
        $application->add(new OnCommand());
        $application->add(new OffCommand());
        $application->run();
    }
}
