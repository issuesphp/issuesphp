<?php

namespace App\Http\Controllers;


class WelcomeController extends MainController
{

  public function index() 
  {    

    $message = 'Welcome to IssuesPHP Framework';

    $data = array(
      "message" => $message      
    );

    return $this->view('welcome/index',$data);

  }
  

}



