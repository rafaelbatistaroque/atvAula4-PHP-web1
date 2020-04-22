<?php

    include_once('./classes/pessoa.class.php');
    class Medico extends Pessoa{
        private $crm;
        private $pessoa;

        public function setCrm($crm) {$this->crm = $crm;}
        public function getCrm() {return $this->crm;}
    }
?>