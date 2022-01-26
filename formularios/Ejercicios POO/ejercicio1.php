<?php

class animal{
    public $tipo;
    public $especie;

    function set_especie($string){
        $this->especie=$string;
    }
    function set_tipo($string){
        $this->tipo=$string;

    }

}

class ave{
    public $especie;
    public $tipo="Oviparo";
    function __construct($string)
    {
       $this->especie=$string; 
    }
    
    function volar(){
        echo "Volando<br>";
    }
    function dejarvolar(){
        echo "Aterrizando<br>";
    }
    
}
class gato{
    public $especie;
    public $tipo="Mamifero";
    function __construct($string)
    {
       $this->especie=$string; 
    }
    
    function Correr(){
        echo "Corriendo<br>";
    }
    function dejardecorrer(){
        echo "Dejando de correr<br>";
    }
    
}
class Perro{
    public $especie;
    public $tipo="Mamifero";
    function __construct($string)
    {
       $this->especie=$string; 
    }
    
    function ladrar(){
        echo "Guau Guau<br>";
    }
    function correr(){
        echo "corriendo<br>";
    }
    
}
class Canario{
    public $especie;
    public $tipo="Oviparo";
    function __construct($string)
    {
       $this->especie=$string; 
    }
    function cantar(){
        echo "Pio Pio Montepio<br>";
    }
    function volar(){
        echo "Volando<br>";
    }
    function dejarvolar(){
        echo "Aterrizando<br>";
    }
    
}
class Pinguino{
    public $especie;
    public $tipo="Oviparo";
    function __construct($string)
    {
       $this->especie=$string; 
    }
    function bailar(){
        echo "Bailando claqué<br>";
    }
    function deslizar(){
        echo "Deslizandose<br>";
    }
    function dejardeslizar(){
        echo "Dejando de deslizarse<br>";
    }
    
}
class lagarto{
    public $especie;
    public $tipo="Reptil";
    function __construct($string)
    {
       $this->especie=$string; 
    }
    
    function irporpared(){
        echo "Moviendose por la pared<br>";
    }
    function modocaza(){
        echo "Buscando moscas que matar<br>";
    }
    
}

$gaviota = new ave("gaviota");
$Gato = new gato("egipcio");
$perro = new Perro("Golden retriever");
$canario = new Canario("canario");
$Pinguino = new Pinguino("Pinguino emperador");
$lagartija = new Lagarto("Lagartija");


$gaviota->volar();
$Pinguino->bailar();
$Gato->Correr();
$perro->ladrar();
$canario->cantar();
$lagartija->modocaza();

?>
