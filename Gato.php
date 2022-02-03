<?php
require_once ('./padre/Animal.php');
class Gato extends Animal{
    public function comer(){
        echo "<p>Animal comiendo</p>";
    }

  
    public function mostrarDormir(){
        $this->dormir();
    }
}
