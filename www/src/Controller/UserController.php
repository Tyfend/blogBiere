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
