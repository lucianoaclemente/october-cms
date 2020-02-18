<?php namespace Lucianoclemente\Instagramapi;

/**
 * The plugin.php file (called the plugin initialization script) defines the plugin information class.
 */

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Instagram API',
            'description' => 'Provides integration with Instagram.',
            'author'      => 'Luciano Clemente',
            'icon'        => 'icon-instagram'
        ];
    }

    public function registerComponents()
    {
        return [
			'Lucianoclemente\Instagramapi\Components\Instagram' => 'instagram',
		];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'Instagram API',
                'icon'        => 'icon-instagram',
                'description' => 'Configure Instagram authentication parameters.',
                'class'       => 'Lucianoclemente\Instagramapi\Models\Settings',
                'order'       => 211
            ]
        ];
    }
}