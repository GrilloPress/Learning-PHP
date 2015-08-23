<?php
//
//
// @title Third Object
// 
// A file to show off more object functions

class Vehicle {
  
  $license = "";
  
  public function horn(){
    
   return "HONK HONK!";
    
  }
  
  public function registration($license){
    
    return $this->license;
    
  }
  
  public $maker = "Andrew";
  
}