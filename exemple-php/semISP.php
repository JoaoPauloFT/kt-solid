<?php

interface Clock {
    public function setAlarm($instant);
    public function readThermometer(): float;
    public function tuneInToRandomRadio();
}

class AncientClock implements Clock {
    public function setAlarm($instant) {
        // set the alarm 
    }

    public function readThermometer(): float {
        throw new Exception("ancient clock does not have thermometer");
    }

    public function tuneInToRandomRadio() {
        // tune in to one of the stations
    }
}

class ModernClock implements Clock {
    public function setAlarm($instant) {
        // set the alarm 
    }

    public function readThermometer(): float {
        return 5; // return some value
    }

    public function tuneInToRandomRadio() {
        throw new Exception("modern clock cannot play radio");
    }
}

class DigitalOven {
    public function startCooking(Clock $clock) {
        //...
        $clock->setAlarm(time());
        //...
    }
}

?>
