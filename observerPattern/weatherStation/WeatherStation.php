<?php

require __DIR__ . '/../../classLoader.php';

use observerPattern\weatherStation\CurrentConditionDisplay;
use observerPattern\weatherStation\StatisticsDisplay;
use observerPattern\weatherStation\WeatherData;

$data = new WeatherData;
$currentConditionDisplay = new CurrentConditionDisplay($data);
$statisticsDisplay = new StatisticsDisplay($data);

$data->setMeasurements(20,62,1081);
$data->setMeasurements(25,30,1081);
$data->setMeasurements(23,50,1081);