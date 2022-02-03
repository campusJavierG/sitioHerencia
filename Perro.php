<?php
require_once('./padre/Animal.php');
class Perro extends Animal{
    //sobreescritura
    public function comer(){
        echo "<p>El perro, come huesos</p>";
    }
    // mostrar función dormir
    public function mostrarDormir(){
        $this->dormir();
    }
}
