<?php
    //2. Crie um código em PHP que implementa um objeto Medico que herda os atributos e
    //funções da classe Pessoa. Essa classe ainda deve ter um atributo para armazenar o
    //CRM do médico. Você deve criar o getter e setter para esse atributo.
    include_once("./classes/medico.class.php");
    $medico = new Medico();
   
    $medico->setCrm('CRM321');
    $medico->setNome('Joao Pereira');
    $medico->setIdade(50);
    $medico->setCpf(32165498710);

    echo "Dr: ".$medico->getNome()
        ." - CRM: ".$medico->getCrm()
        ." | Dados Pessoais - CPF ".$medico->getCpf()
        ." - Idade".$medico->getIdade();
?>