<?php

class Animal {
    public $name;
    public $species;
    public $year;
    public $gender;

    function __construct($name = null, $species = null, $year = null, $gender = null)
    {
        $this->name = $name;
        $this->species = $species;
        $this->year = $year;
        $this->gender = $gender;        
    }

  public function intro()
  {
    echo "Sveiki, aš esu " . $this->species . " " . $this->name . ". Man yra " . $this->year . "metų(ai), ir aš esu " .
      ( $this->gender ? "berniukas" : "mergaitė" )
     . "<br>";
  }

  public static function classInfo(){
    echo "Šita klasė yra skirta sukurti gyvūnams<br>";
  }

}
?>