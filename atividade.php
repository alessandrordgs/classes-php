<?php

abstract class Pessoa{
  public $nome;
  public $cpf;
  public $data_nascimento;

  function setNome($nome){
    $this ->nome = $nome;
  }

  function getNome(){
    return $this -> nome;
  }

   function setCpf($cpf){
     $this -> cpf =$cpf;
   }

   function getCpf(){
     return $this -> cpf;
   }

   function setDataNascimento($data_nascimento){
     $this -> data_nascimento = $data_nascimento;
   }

   function getDataNascimento(){
     return $this -> data_nascimento;
   }

   function tirarCopias($quantidadeCopias, $valorDaCopia){
    return $quantidadeCopias * $valorDaCopia;
   }
}

class Aluno extends Pessoa{
  public $matricula;

  function setMatricula($matricula){
     $this -> matricula = $matricula;
  }

  function getMatricula(){
    return $this-> matricula; 
  }

  function tirarCopias($quantidadeCopias){
    return $quantidadeCopias * 0.10;
  }

}

class Professor extends Pessoa{
  public $salario;
  public $disciplina;

  function setSalario($salario){
    $this -> salario = $salario;
  }

  function getSalario(){
    return $this -> salario;
  }

  function setDisciplina($disciplina){
    $this -> disciplina = $disciplina;
  }
  
  function getDisciplina(){
    return $this -> disciplina;
  }
  
  function tirarCopias($quantidadeCopias){
    return $quantidadeCopias * 0.08;
  }

}

$aluno = new Aluno();
$aluno -> setNome("Alessandro");
$aluno -> setCpf(34937489062);
$aluno -> setDataNascimento("20/2/2000");
$aluno -> setMatricula('id129818298291');
$aluno -> tirarCopias(10);

$professor = new Professor();
$professor -> setNome('Amerson');
$professor -> setCpf(54879634018);
$professor -> setSalario(2000);
$professor -> setDataNascimento('20/10/1990');
$professor -> setDisciplina('Orientado a objetos');
$professor -> tirarCopias(10)


?>