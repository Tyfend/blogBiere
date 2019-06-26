<?php
namespace App\Controller;

use \Core\Controller\Controller;


use App\Controller\PaginatedQueryAppController;

class BeerController extends Controller
{

    public function __construct()
    {
        $this->loadModel('beer');
    }
    public function all()
    {

        $paginatedQuery = new PaginatedQueryAppController(
            $this->beer,
            $this->generateUrl('shop')
        );
        $beers = $paginatedQuery->getItems();
        $title = "Nos Bières";

        $this->render(
            "beer/all",
            [
                "title" => $title,
                "beers" => $beers,
                "paginate" => $paginatedQuery->getNavHTML()
            ]
        );
    }

  
}
