<?php

namespace observerPattern\weatherStation;

use observerPattern\pattern\Observer;

class CurrentConditionDisplay implements Observer, DisplayElement
{
    private $temperature;
    private $humidity;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    public function display(): void
    {
        echo "Il fait " . $this->temperature . "°C, avec une humidité de " . $this->humidity . "%.\n";
    }
}
