<?php

namespace Kanboard\Plugin\ThemeMaestro;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/ThemeMaestro/ThemeMaestro.css'));
    }

    public function getPluginName()
    {
        return 'ThemeMaestro';
    }

    public function getPluginDescription()
    {
        return 'A colorful theme to utilise color sets to refresh the interface.';
    }

    public function getPluginAuthor()
    {
        return 'JustFxDev';
    }

    public function getPluginVersion()
    {
        return '0.7.0';
    }

    public function getCompatibleVersion()
    {
        // Examples:
        // >=1.0.37
        // <1.0.37
        // <=1.0.37
        return '>=1.2.11';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/JustFxDev/ThemeMaestro';
    }
}
