<?php

    include_once('./classes/pessoa.class.php');
    include_once('./classes/medico.class.php');
    class Paciente extends Pessoa{
        private $pessoa;
        private $medico;

        public function setMedico($medico) {$this->medico = $medico;}
        public function getMedico() {return $this->medico;}

    }
?>