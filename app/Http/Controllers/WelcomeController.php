<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\IpController;

use App\Models\Welcome;


class WelcomeController extends IpController
{

  public function index() 
  { 

    return $this->view('welcome/index');
    
  }   

}



