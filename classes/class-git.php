
<?php

class Coche {
    
    //atributos
    public $velocidad;
    public $color;
    public $modelo;
    
    
    // Contructor
    
    public function __construct($velocidad, $color, $modelo) {
        $this->velocidad = $velocidad;
        $this->color = $color;
        $this->modelo = $modelo;
    }
    
    
   public function getVelocidad() {
      return $this->velocidad; 
   }
  
}