<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\MainController;


include 'vendor/issuesphp/framework/src/Issues/Controller/Request/MainController.php';


class WelcomeController extends MainController
{

  public function index() 
  { 

    $this->view('welcome');
    
  }   

}



