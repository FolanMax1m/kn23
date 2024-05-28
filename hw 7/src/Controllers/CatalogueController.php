<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class CatalogueController
{
    public function index(): void
    {
        $page = 'catalogue';
        $title = 'Catalogue Page';
        $content = 'Hello! Its Catalogue page';
        $info = 'all the products are here';

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]
        );

        $view->render();
    }

}