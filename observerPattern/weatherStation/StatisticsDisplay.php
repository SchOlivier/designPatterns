<?php

namespace observerPattern\weatherStation;

use observerPattern\pattern\Observer;

class StatisticsDisplay implements Observer, DisplayElement
{
    private array $temperatures;
    private WeatherData $weatherData;

    public function __construct(WeatherData $weatherData)
    {
        $this->temperatures = [];
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperatures[] = $temperature;
        $this->display();
    }

    public function display(): void
    {
        $min = min($this->temperatures);
        $max = max($this->temperatures);
        $avg = array_sum($this->temperatures) / count($this->temperatures);
        echo "Avg / Min / Max : $avg / $min / $max\n";
    }
}
