<?php
include 'Observer.php';
include 'DisplayElement.php';
class CurrentConditionDisplay implements Observer,DisplayElement
{
  public function update($temp,$humidity,$pressure) {

  }
  function display() {

  }
}
