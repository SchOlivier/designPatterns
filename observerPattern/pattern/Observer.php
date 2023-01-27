<?php

namespace observerPattern\pattern;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure);
}
