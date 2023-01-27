<?php

namespace observerPattern\weatherStation;

use observerPattern\pattern\Observer;
use observerPattern\pattern\Subject;

class WeatherData implements Subject
{
    private float $temperature;
    private float $humidity;
    private float $pressure;

    private array $observers;

    public function __construct()
    {
        $this->observers = [];
    }

    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o): void
    {
        $key = array_search($o, $this->observers, true);
        if ($key !== false) unset($this->observers[$key]);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $o) {
            $o->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}
