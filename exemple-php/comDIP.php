<?php

interface Device
{
  public function trigger();
  public function turnOn();
  public function turnOff();
}

class Fan implements Device
{  
  public $status = false;
  
  public function trigger ()
  {
    if (!$this->status)
      $this->turnOn();
    else
      $this->turnOff();
  }
  
  public function turnOn() { 
    $this->status = true;
    // Lógica para ligar o ventilador
  }
  
  public function turnOff() { 
    $this->status = false;
    // Lógica para desligar o ventilador
  }
}

class Lamp implements Device
{  
  public $status = false;
  
  public function trigger ()
  {
    if (!$this->status)
      $this->turnOn();
    else
      $this->turnOff();
  }
  
  public function turnOn() { 
    $this->status = true;
    // Lógica para ligar a lâmpada
  }
  
  public function turnOff() { 
    $this->status = false;
    // Lógica para desligar a lâmpada
  }
}

class MainSwitch
{
  private $device;
  
  public function __construct($device) {
    $this->device = $device;
  }
  
  public function triggerDevice()
  {
    $this->device->trigger();
  }
}

?>
