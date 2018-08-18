<?php
class WeatherDataEngine
{
  private $temp;
  private $humidity;
  private $pressure;

  public function __construct() {
    $this->temp = 24;
    $this->humidity = 40;
    $this->pressure = 0.5;
  }

  public function getTemperature() {
    return $this->temp;
  }

  public function getHumidity() {
    return $this->humidity;
  }

  public function getPressure() {
    return $this->pressure;
  }

  public function measurementsChanged() {
    
  }

}
