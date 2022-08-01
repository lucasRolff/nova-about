<?php

namespace RhysLees\NovaAbout;

use Illuminate\Foundation\Console\AboutCommand;

class NovaAbout
{
    /**
     * Add your package to the Nova About section.
     *
     * @param string $pacakge
     *
     * @return void
     */
    public static function addPackage($packagename)
    {
        $packageVersion = \Composer\InstalledVersions::getVersion($packagename);
        AboutCommand::add('Nova Packages', $packagename, $packageVersion);
    }
}
