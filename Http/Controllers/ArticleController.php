<?php

namespace App\Twill\Capsules\Articles\Http\Controllers;



use App\Twill\Capsules\Base\ModuleController;

class ArticleController extends ModuleController
{
    protected $moduleName = 'articles';

    // Amend this to match the front end route e.g. 'blog', 'news' etc.
    protected $permalinkBase = 'articles';

    // Blade view to be rendered for previews
    protected $previewView = 'site.articles.show';

    protected $browserColumns = [
        //'categories',
    ];

    // set this to the prefix configured in twill-navigation if module is not running at top level.
    protected $routePrefix = '';

    /*
    Columns to display on the index view.
    If there is an image this can be added by adding the below config.  It *MUST* be the first column
                'image' => [
                    'thumb' => true, // image column
                    'variant' => [
                        'role' => 'cover',
                        'crop' => 'thumbnail',
                    ],
                ],
    */
    protected $indexColumns = [
        'title' => [
            'title' => 'Title',
            'field' => 'title',
            'sort' => true
        ],
//        'category' => [
//            'title' => 'Category',
//            'field' => 'title',
//            'relationship' => 'category'
//        ],
        'publish_date' => [
            'title' => 'Published',
            'field' => 'publish_start_date',
            'sort' => true,
        ]
    ];

    // Default ordering for the index page
    protected $defaultOrders = ['publish_start_date' => 'desc'];

    // Data required for the preview view
    protected function previewData($item)
    {
        return [
            'article' => $item,
        ];
    }

    // Data for the form view
    protected function formData($request)
    {
        return [
            'metadata_card_type_options' => config('metadata.card_type_options'),
            'metadata_og_type_options' => config('metadata.opengraph_type_options'),
            //'authors' => app()->make(TeamMemberRepository::class)->listAll()
        ];
    }
}
