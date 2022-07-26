<?php
     class cliente{
          private $nome;
          private $idade;
          private $sexo;
          private $horario;
          private $dia;
          
          
          /**
           * Get the value of nome
           */ 
          
          public function getNome()
          {
                    return $this->nome;
          }
          /**
           * Set the value of nome
           *
           * @return  self
           */ 
         
          public function setNome($nome)
          {
                    $this->nome = $nome;

                    return $this;
          }
          /**
           * Get the value of idade
           */ 
          
          public function getIdade()
          {
                    return $this->idade;
          }
          /**
           * Set the value of idade
           *
           * @return  self
           */ 
         
          public function setIdade($idade)
          {
                    $this->idade = $idade;

                    return $this;
          }
          /**
           * Get the value of sexo
           */ 
          
          public function getsexo()
          {
                    return $this->sexo;
          }
          /**
           * Set the value of sexo
           *
           * @return  self
           */ 
         
          public function setsexo($sexo)
          {
                    $this->sexo = $sexo;

                    return $this;
          }
          /**
           * Get the value of horario
           */ 
          public function getHorario()
          {
                    return $this->horario;
          }
          /**
           * Set the value of horario
           *
           * @return  self
           */ 
          public function setHorario($horario)
          {
                    $this->horario = $horario;

                    return $this;
          }

          /**
           * Get the value of dia
           */ 
          public function getdia()
          {
                    return $this->dia;
          }

          /**
           * Set the value of dia
           *
           * @return  self
           */ 
          public function setdia($dia)
          {
                    $this->dia = $dia;

                    return $this;
          }
     }
?>