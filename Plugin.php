<?php namespace Marpo\Comic;

use Backend;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'marpo.comic::lang.plugin.name',
            'description' => 'marpo.comic::lang.plugin.description',
            'author'      => 'Martin Pollock',
            'icon'        => 'icon-book',
            'homepage'    => 'https://github.com/MarpoOcknew/october-comic-plugin'
        ];
    }

    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerNavigation()
    {
        return [
            'comic' => [
                'label'       => 'marpo.comic::lang.comic.menu_label',
                'url'         => Backend::url('marpo/comic/pages'),
                'icon'        => 'icon-book',
                'order'       => 350,

                'sideMenu' => [
                    'new_page' => [
                        'label'       => 'marpo.comic::lang.pages.new_page',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('marpo/comic/pages/create'),
                    ],
                    'pages' => [
                        'label'       => 'marpo.comic::lang.comic.pages',
                        'icon'        => 'icon-copy',
                        'url'         => Backend::url('marpo/comic/pages'),
                    ],
                    'chapters' => [
                        'label'       => 'marpo.comic::lang.comic.chapters',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('marpo/comic/chapters'),
                    ]
                ]
            ]
        ];
    }
}
