<?php
    //3. Crie um código em PHP que implementa um objeto Paciente que herda
    //os atributos e funções da classe Pessoa. Essa classe deve ter uma agregação
    //com a classe Medico já que o Paciente poderá ter um médico agregado a ela.

    include_once('./classes/paciente.class.php');

    $paciente = new Paciente();
    $paciente->setNome("Pedro Manso");
    $paciente->setIdade(42);
    $paciente->setCpf("234.156.789-10");
    
    $atendimentoMedico = new Medico();
    $atendimentoMedico->setCrm("CRM1212");
    $atendimentoMedico->setNome("Amâncio");
    $atendimentoMedico->setIdade(55);
    $atendimentoMedico->setCpf("55577766611");

    $paciente->setMedico($atendimentoMedico);
    echo "Nome paciente: ".$paciente->getNome()
        ." | Idade: ".$paciente->getIdade()
        ." | CPF ".$paciente->getCpf()."<br>";
        
    echo "Atendimento médico: Dr.".$paciente->getMedico()->getNome()
        ." | CRM: ".$paciente->getMedico()->getCrm()
        ." | Idade: ".$paciente->getMedico()->getIdade()
        ." | CPF ".$paciente->getMedico()->getCpf()."<br>";

?>