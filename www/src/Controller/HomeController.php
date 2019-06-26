<?php
namespace App\Controller;

use \Core\Controller\Controller;


use App\Controller\PaginatedQueryAppController;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->loadModel('category');
        $this->loadModel('post');
    }
    public function all()
    {

    
        
        //$categories = $paginatedQuery->getItems();
        $title = "Bread Beer Shop";

        $this->render(
            "home/all",
            [
                "title" => $title,
                "categories" => $categories
            ]
        );
    }

    
}
