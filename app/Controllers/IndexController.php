<?php

namespace App\controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class IndexController
{
    public function index(Request $request, Application $app) {
        return $app['twig']->render('index.html', [
            'name' => 'World'
        ]);
    }

}