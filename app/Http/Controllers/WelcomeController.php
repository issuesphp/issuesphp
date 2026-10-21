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

    return $this->view('welcome/index',$data);

  }

  public function show($id) 
  {   

   return $this->view('welcome/show',$id);
   

 }   

 public function add() 
 {    

  return $this->view('welcome/add');

}

public function store($request) 
{   

  $data = array(
    "name" => 'a'      
  );

  $welcome = new Welcome();


  print_r($welcome->insert($data));


}

public function delete($id) 
{   

 return $this->redirectGo('welcome','add');


}        

}



