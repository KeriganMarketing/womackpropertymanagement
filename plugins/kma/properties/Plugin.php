<?php

namespace Kma\Properties;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'nl2br' => 'nl2br'
            ]
        ];
    }
}
