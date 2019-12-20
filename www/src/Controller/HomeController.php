<?php
namespace App\Controller;

use \Core\Controller\Controller;
use \Core\Controller\Helpers\SendMailController;

class HomeController extends Controller
{

    public function index()
    {
       
        
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['submit'] == 'submit') {
            
            $email = htmlspecialchars($_POST['email']);
            $emailMsg = htmlspecialchars($_POST['emailMsg']);
            if (!empty($email && $emailMsg)) {
                SendMailController::sendMail(
                    getenv('MAIL_FROM'), 'contact site bière', 
                    "<p>From: {$email}</p><br/><p>Message:<br />{$emailMsg}</p>", 
                    "From: {$email}; Message: {$emailMsg}", 
                    false
                );
                $message = 'mail envoyé !';
            }
        }

        $this->render(
            "home/all",
            [
                'message' => $message
            ]
        );
    }

    public function all()
    {
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
