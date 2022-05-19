<?php namespace Octobro\Metabase;

use Backend;
use System\Classes\PluginBase;

/**
 * Metabase Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Metabase',
            'description' => 'No description provided yet...',
            'author'      => 'Octobro',
            'icon'        => 'icon-bar-chart'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'octobro.metabase.menu' => [
                'tab' => 'Metabase',
                'label' => 'Allow Access to see Metabase Menu'
            ],
            'octobro.metabase.widgets.dashboard' => [
                'tab' => 'Metabase',
                'label' => 'Allow Access to see Metabase Widget on Dashboard Menu'
            ],
        ];
    }

    public function registerReportWidgets()
    {
        return [
            \Octobro\Metabase\ReportWidgets\Metabase::class => [
                'label' => 'Metabase',
                'context' => 'dashboard',
                'permissions' => [
                    'octobro.metabase.widgets.dashboard',
                ],
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'statistics' => [
                'label'       => 'Metabase',
                'url'         => Backend::url('octobro/metabase/statistics'),
                'icon'        => 'icon-bar-chart',
                'permissions' => ['octobro.metabase.menu'],
                'order'       => 490
            ],
        ];
    }
}
