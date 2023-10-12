<?php

class CompteBancaire {
    private $name;
    private $value;

    function __construct($name, $value) {
        $this->name = $name;
        $this->value = $value;
    }

    public function depot($somme) {
        return $this->value = $this->value + $somme;
    }

    public function retrait($somme) {
        return $this->value = $this->value - $somme;
    }

    public function affiche() {
        echo "Le solde de {$this->name}, est de {$this->value} euros";
    }
}
?>