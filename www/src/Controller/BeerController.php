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

    public function show(string $title, int $id)
    {

        $beer = $this->beer->find($id);

        if (!$beer) {
            throw new \Exception('Aucun produit ne correspond à cet ID');
        }

        if ($beer->getTitle() !== $title) {
            $url = $this->generateUrl('beer', ['id' => $id, 'title' => $beer->getTitle()]);

            http_response_code(301);
            header('Location: ' . $url);
            exit();
        }

       

        $title = "produit : " . $beer->getTitle();

        $this->render(
            "beer/show",
            [
                "title" => $title,
                "beer" => $beer
            ]
        );
    }
  
}
