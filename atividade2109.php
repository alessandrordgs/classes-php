<?php
 abstract class Employee {
   public $name;
   public $salario;
  
 abstract function generateBonus($salario);
 abstract function __construct($name, $salario);
}


class Manager extends Employee {
 public function __construct($name, $salario){
    $this->name = $name;
    $this->salario = $salario;
  }
  function generateBonus($salario){  
    return $salario * 1.8;
   }
}

class Secretary extends Employee{
  public function __construct($name, $salario){
    $this->name = $name;
    $this->salario = $salario;
  }
  function generateBonus($salario){  
    return $salario * 1.1;
   }
}

$manager = new Manager("Alessandro", 3500);
echo $manager->name;
echo "<br/>";
echo $manager->salario;
echo "<br/>";
echo $manager -> generateBonus($manager->salario);

echo "<br/>";
echo "<br/>";


$secretary = new Secretary("Rafaela", 1100);
echo $secretary->name;
echo "<br/>";
echo $secretary->salario;
echo "<br/>";
echo $secretary -> generateBonus($secretary->salario);
 
?>