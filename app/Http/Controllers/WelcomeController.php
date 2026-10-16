<?php

namespace App\Http\Controllers;

use App\Models\Welcome;


class WelcomeController extends MainController
{

  public function index() 
  {    

    $message = 'Welcome to IssuesPHP Framework';

    $data = array(
      "message" => $message      
    );

    $jstring = json_encode($data);

    return $this->view('welcome/index',$jstring);

  }   

}



