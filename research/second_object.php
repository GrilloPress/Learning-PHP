<?php
//
//
// @title Second Object
// 
// A file to show off object functions

class Bus {
  
  public function horn(){
    
   return "HONK HONK!";
    
  }
  
}

$redBus = new Bus;

echo $redBus->horn();