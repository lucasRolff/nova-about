<?php

namespace RhysLees\NovaAbout;

use Illuminate\Foundation\Console\AboutCommand;

class NovaAbout
{
    /**
     * Add your package to the Nova About section.
     *
     * @param  string  $pacakge
     * @return void
     */
    public static function addPackage($packageName)
    {
        try {
            $packageVersion = \Composer\InstalledVersions::getVersion($packageName);
        } catch (\Exception $e) {
            $packageVersion = $e->getMessage();
        }

        AboutCommand::add('Nova Packages', $packageName, $packageVersion);
    }
}
