<?php

class MainSwitch
{
  private $fan;
  
  public function __construct($fan)
  {
    $this->fan = $fan;
  }
  
  public function trigger()
  {
    if(!$this->fan->status)
      $this->fan->turnOn();
    else
      $this->fan->turnOff();
  }
}

class Fan
{
  public $status = false;
  
  public function turnOn() { 
    $this->status = true;
    // Lógica para ligar o ventilador
  }
  
  public function turnOff() { 
    $this->status = false;
    // Lógica para desligar o ventilador
  }
}

?>
