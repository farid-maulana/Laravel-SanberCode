<?php

class Frog extends Animal {

    public function getLegs() {
        return $this->legs = 4;
    }

    public function jump() {
        echo "hop hop";
    }

}

?>