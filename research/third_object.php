<?php
//
//
// @title Third Object
// 
// A file to show off more object functions

class Vehicle {
  
  public $license = "";
  
  public function horn(){
    
   return "HONK HONK!";
    
  }
  
  public function set_registration($new_license){
    
    $this->license = $new_license;
    
  }
  
  public function read_registration(){
    
    return $this->license;
    
  }
  
  public $maker = "Andrew";
  
}

$redBus = new Vehicle;

echo $redBus->horn();
echo $redBus->maker;
$redBus->set_registration("012834903");
echo $redBus->read_registration();