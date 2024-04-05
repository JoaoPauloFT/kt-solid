<?php

interface Alarm {
    public function setAlarm($instant);
}

interface Thermometer {
    public function readThermometer();
}

interface RadioPlayer {
    public function tuneInToRandomRadio();
}

class AncientClock implements Alarm, RadioPlayer {
    public function setAlarm($instant) {
        // set the alarm 
    }

    public function tuneInToRandomRadio() {
        // tune in to one of the stations
    }
}

class ModernClock implements Alarm, Thermometer {
    public function setAlarm($instant) {
        // set the alarm 
    }

    public function readThermometer(): float {
        return 5; // return some value
    }
}

class DigitalOven {
    public function startCooking(Alarm $alarm) {
        //...
        $alarm->setAlarm(time());
        //...
    }
}

?>
