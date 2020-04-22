<?php
    //1. Crie um código em PHP que implementa um objeto Pessoa e armazene NOME, IDADE e
    //CPF. Você deve criar os getters e setters para cada um dos atributos.

    include_once('./classes/pessoa.class.php');
    $pessoa = new Pessoa();

    $pessoa->setNome('Rafael');
    $pessoa->setIdade(33);
    $pessoa->setCpf('123.456.789-10');

    echo "Nome: ".$pessoa->getNome()
        ." | Idade: ".$pessoa->getIdade()
        ." | Cpf: ".$pessoa->getCpf();

?>