<?php
$basePath = dirname(__dir__) . DIRECTORY_SEPARATOR;

require_once $basePath . 'vendor/autoload.php';

$app = App\App::getInstance();
$app->setStartTime();
$app::load();

$app->getRouter($basePath)
    ->get('/', 'Home#all', 'home')
    ->get('/blog', 'Post#all', 'blog')
    ->get('/categories', 'Category#all', 'categories')
    ->get('/shop', 'Beer#all', 'shop')
    ->get('/category/[*:slug]-[i:id]', 'Category#show', 'category')
    ->get('/article/[*:slug]-[i:id]', 'post#show', 'post')
    ->get('/connexion', 'user#connexion', 'connexion')
    ->get('/register', 'user#register', 'register')
    ->get('/register', 'user#profil', 'profil')
    ->get('/test', 'Twig#index', 'test')
    ->run();
