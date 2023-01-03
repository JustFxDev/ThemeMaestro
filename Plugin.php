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
        return t('Nice and more colored theme family for Kanboard. Supports the Customizer plugin.');
    }

    public function getPluginAuthor()
    {
        return 'JustFxDev (fx)';
    }

    public function getPluginVersion()
    {
        return '0.7.0';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/JustFxDev/ThemeMaestro';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.11';
    }
}
