<?php

namespace App\Controllers;

use \Core\View;

class PageController extends \Core\Controller
{

    /**
     * @return void
     */
    public function indexAction()
    {
        View::render('Home/index', ['title' => 'HomePage', 'content' => "I'm in the homepage"]);
    }

    /**
     * @return void
     */
    public function folderOne()
    {
        View::render('Home/index', ['title' => 'Folder 1', 'content' => "I'm in folder1"]);
    }


    /**
     * @return void
     */
    public function folderTwo()
    {
        View::render('Home/index', ['title' => 'Folder 2', 'content' => "I'm in folder2"]);
    }

}
