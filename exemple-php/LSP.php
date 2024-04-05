<?php

class Sports {
    public $name;
    public $type;

    public function add($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }
}

class OlimpicSports extends Sports {
    public function add($name, $type) {
        if ($type === "olympic") {
            throw new Exception("Não é permitido esse tipo de Sports");
        }

        $this->name = $name;
        $this->type = $type;
    }
}

function put($sport, $name, $type) {
    $sport->add($name, $type);
}

$battleRoyale = new Sports();
put($battleRoyale, "Fortnite", "e-sports");

$basket = new OlimpicSports();
put($basket, "Basquete", "olympic");

$fps = new OlimpicSports();
put($fps, "Counter-Strike", "e-sports"); //Error