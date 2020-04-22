<?php

    class Pessoa{
        protected $nome;
        protected $idade;
        protected $cpf;

        public function setNome($nome) {$this->nome = $nome;}
        public function getNome() {return $this->nome;}
        public function setIdade($idade) {$this->idade = $idade;}
        public function getIdade() {return $this->idade;}
        public function setCpf($cpf) {$this->cpf = $cpf;}
        public function getCpf() {return $this->cpf;}
    }
?>