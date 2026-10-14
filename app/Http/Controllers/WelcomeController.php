<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\IpController;


class WelcomeController extends IpController
{

  public function index() 
  { 

    return $this->view('welcome/index');
    
  }   

}



