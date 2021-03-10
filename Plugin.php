<?php namespace Codecycler\Skeleton;

use Backend;
use System\Classes\PluginBase;

/**
 * Skeleton Plugin Information File
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
            'name'        => 'Skeleton',
            'description' => 'No description provided yet...',
            'author'      => 'Codecycler',
            'icon'        => 'icon-leaf'
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
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Codecycler\Skeleton\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'codecycler.skeleton.some_permission' => [
                'tab' => 'Skeleton',
                'label' => 'Some permission'
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
        return []; // Remove this line to activate

        return [
            'skeleton' => [
                'label'       => 'Skeleton',
                'url'         => Backend::url('codecycler/skeleton/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['codecycler.skeleton.*'],
                'order'       => 500,
            ],
        ];
    }
}
