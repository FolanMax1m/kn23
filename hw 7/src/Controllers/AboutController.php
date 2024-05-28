<?php

namespace Iplague\Project\Controllers;

use Iplague\Project\Viewer;

class AboutController
{
    public function index(): void
    {
        $page = 'about';
        $title = 'About Page';
        $content = 'Hello! Its about page';
        $info = 'Jojo is a web developer and a student at the University of the Philippines. He is currently working on a project that aims to help people learn how to code. He is passionate about technology and loves to share his knowledge with others. In his free time, he enjoys playing video games and watching movies.';

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
