<?php
include 'WeatherDataEngine.php';
include 'Subject.php';
class WeatherData extends WeatherDataEngine implements Subject
{
  private $observer;

  public function __construct() {
    $this->observer = new SplDoublyLinkedList();
  }
  public function registerObserver(Observer $o) {
    $this->observer->push($o);
  }
  public function removeObserver(Observer $o) {
    for($this->observer->rewind();$this->observer->valid();$this->observer->next()){

    return $this->observer;
    }
  }
  public function notifyObserver() {

  }

  public function setMeasurements($temp,$humidity,$pressure) {
    $this->temp = $temp;
    $this->humidity = $humidity;
    $this->pressure = $pressure;
    measurementsChanged();
  }
}
