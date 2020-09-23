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

       return "Area: "  . $this -> getArea()  . "<br>"
        . "Perimetro: " . $this -> getPer()  . "<br>";

    }

    public function __toString(){

      return "SQUARE<br>lato: "  . $this -> lato . "<br>"
          . $this -> getAreaAndPer();
    }



  }


// ereditarietà
// metodo 1
  class Cube extends Square{

    public function getVol(){

      return parent::getArea() * $this -> lato;
    }

    public function getSuperf(){

      return 6 * parent::getArea();
    }

    public function __toString(){

      return "CUBE<br>Volume : ". $this -> getVol(). "<br>"
      . "Superficie : ". $this -> getSuperf(). "<br><br>";
    }
  }

// metodo 2
  // class Cube extends Square{
  //
  //   public function __construct( $lato ){
  //          parent::__construct($lato);
  //      }
  //
  //    public function getVol(){
  //
  //      return $this -> lato * $this -> lato * $this -> lato;
  //    }
  //
  //    public function getSuperf(){
  //
  //      return 6 * $this -> lato * $this -> lato ;
  //    }
  //
  //    public function __toString(){
  //
  //        return "CUBE<br>Volume : ". $this -> getVol(). "<br>"
  //        . "Superficie : ". $this -> getSuperf(). "<br><br>";
  //      }
  // }

  $square = new Square(4);
  echo $square;
  echo "<br>";

  $cube = new Cube(3);
  echo $cube;
  echo "<br>";
