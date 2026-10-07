<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\IpController;


include 'vendor/issuesphp/framework/src/Issues/Controller/Request/IpController.php';


class WelcomeController extends IpController
{

  public function index() 
  { 

    $this->view('welcome/index');
    
  }   

}



