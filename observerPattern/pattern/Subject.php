<?php

namespace observerPattern\pattern;

interface Subject {
    public function registerObserver(Observer $o): void;
    public function removeObserver(Observer $o): void;
    public function notifyObservers(): void;
}