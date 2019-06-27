<?php
namespace App\Controller;

use \Core\Controller\Controller;

class UserController extends Controller
{

    public function __construct()
    {
        $this->loadModel('post');
        $this->loadModel('category');
    }


    public function inscription(){
        $title = "INSCRIPTION";

        $this->render(
            "user/register",
            [
                "title" => $title,
                "categories" => $categories
            ]
        );

    }

    public function connection(){
        $title = "CONNECTION";

        $this->render(
            "user/connexion",
            [
                "title" => $title,
                "categories" => $categories
            ]
        );
    }

    public function profil(){
        $title = "PROFIL";

        $this->render(
            "user/profil",
            [
                "title" => $title,
                "categories" => $categories
            ]
        );
    }

    







}
