<?php

namespace App\Http\Controllers;


use Issues\Controller\Request\IpController;

// include 'vendor/issuesphp/framework/src/Issues/Config/App/path.php';

// include PATH_MAIN;

// include PATH_CONTROLLER;


class WelcomeController extends IpController
{

  public function index() 
  { 

    return $this->view('welcome/index');
    
  }   

}



