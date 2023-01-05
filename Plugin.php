<?php

namespace Kanboard\Plugin\ThemeMaestro;

use Kanboard\Core\Plugin\Base;
use Kanboard\Core\Translator;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array('template' => 'plugins/ThemeMaestro/ThemeMaestro.css'));
    }

    public function onStartup()
    {
        Translator::load($this->languageModel->getCurrentLanguage(), __DIR__.'/Locale');
    }

    public function getPluginName()
    {
        // Plugin Name MUST be identical to namespace for Plugin Directory to detect updated versions
        // Do not translate the plugin name here
        return 'ThemeMaestro';
    }

    public function getPluginDescription()
    {
        return t('A colorful theme to refresh the interface using different color schemes.');
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
