<?php

/**include 'observer/WeatherData.php';
include 'observer/CurrentConditionDisplay.php';
$weatherData = new WeatherData();
$o = new CurrentConditionDisplay();
$s = new CurrentConditionDisplay();
$weatherData->registerObserver($o);
$weatherData->registerObserver($s);
print_r($weatherData->removeObserver($o));
*/



include 'Singleton/SingletonDataConnection';

$dataBaseCon = SingletonDataConnection::getInstance();
$dataBaseCon1 = SingletonDataConnection::getInstance();
print_r($dataBaseCon);
$statement = 'SELECT * FROM VA';

if ($result = $dataBaseCon->query($statement)) {
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        print_r($row);
    }
}
