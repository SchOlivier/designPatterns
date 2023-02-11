<?php

namespace observerPattern\pattern;

interface Observer
{
    // public function update(float $temperature, float $humidity, float $pressure); // Get updated with every data element the subject has
    public function update(); // Alternative, the subject only notifies that its data changed and lets the observers pull what they need
}
