<?php
//
//
// @title First Object
// 
// A file to show off creating objects

class Person {
  
  public $ego = "ME ME ME!";
  
}

$andrew = new Person;
echo $andrew->ego;