<?php
namespace App\Controller;

use \Core\Controller\Controller;
use App\Model\Entity\UserEntity;

class ProfilController extends Controller
{

    public function __construct()
    {
        $this->loadModel('user');
    }


    public function inscription(){
        $title = "";

        $this->render(
            "user/register",
            [
                "title" => $title,
                "categories" => $categories
            ]
        );

    }

    public function connection(){
        $title = "";

        $this->render(
            "user/connexion",
            [
                "title" => $title,
                "categories" => $categories
            ]
        );
    }

    public function profil(){
        $title = "";

        $this->render(
            "user/profil",
            [
                "title" => $title,
                "categories" => $categories
            ]
        );
    }

    







}
