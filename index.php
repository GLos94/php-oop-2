<!-- definire classe Square e classe Cube (2 e 3 dimensioni); definire, oltre a variabili d'istanza, costruttore, e toString, i metodi per il calcolo dell'area/volume e del perimetro/superficie cercando di sfruttare al meglio ereditarieta' e polimorfismo; testare le classi definite con alcune istanze per verificare che sia tutto corretto -->

<?php

  class Square{

    public $lato;

    public function __construct($lato){

      $this -> lato = $lato;
    }

    public function getLato(){

      return $this -> lato;
    }

    public function getArea() {

      return $this -> lato * $this -> lato;

    }

    public function getPer(){

      return 4 * $this -> lato;
    }

    public function getAreaAndPer(){

       return "area: "  . $this -> getArea()  . "<br>"
        . "perimetro: " . $this -> getPer()  . "<br>";

    }

    public function __toString(){

      return "SQUARE<br>lato: "  . $this -> lato . "<br>"
          . $this -> getAreaAndPer();
    }



  }


  // ereditarietà lato
    class Cube extends Square{


    }


  $square = new Square(4);
  echo $square;
  echo "<br>";

  // $cube = new Cube(3);
  // echo $cube;
  // echo "<br>";
