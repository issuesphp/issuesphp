<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\IpController;

include PATH_MAIN;

include PATH_CONTROLLER;


class WelcomeController extends IpController
{

  public function index() 
  { 

    $this->view('welcome/index');
    
  }   

}



