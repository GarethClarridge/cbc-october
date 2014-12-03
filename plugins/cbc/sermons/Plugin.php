<?php namespace CBC\Sermons;

use System\Classes\PluginBase;
use Rainlab\Blog\Models\Post as PostModel;
use Rainlab\Blog\Controllers\Post as PostController;

/**
 * Sermons Plugin Information File
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
            'name'        => 'Sermons',
            'description' => 'No description provided yet...',
            'author'      => 'CBC',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * @var array Plugin dependencies
     */
    public $require = ['Rainlab.Blog'];

    // public function boot()
    // {

    //     PostModel::extend($model){

    //     }

    //     PostController::extendFormFields(function($form, $model, $context){

    //         $form->addTabFields([


    //             ]);
    //     })
    // }
}
