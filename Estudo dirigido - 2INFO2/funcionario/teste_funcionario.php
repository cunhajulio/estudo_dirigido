<?php

    require __DIR__."/Funcionario.php";
    require __DIR__."/Data.php";

    //      --- User1 ---
    $user1 = new Funcionario();
    $user1->departamento = "Marketing";
    $user1->salario = 2250;
    $user1->CPF = "110.754.952-47";

    $Data_Entrada = new Data();
    $Data_Entrada->dia = 22;
    $Data_Entrada->mes = 12;
    $Data_Entrada->ano = 2011;

    $user1->data_Entrada = $Data_Entrada;

    $Salario_Aumento = $user1->recebe_Aumento();
    $Salario_Anual = $user1->calcula_Ganho_Anual();
    print_r($user1);

    echo $user1;
    echo "\n \n";

    //      --- USer2 ---
    $user2 = new Funcionario();
    $user2->departamento = "Gerencia";
    $user2->salario = 5000;
    $user2->CPF = "877.434.982-95";

    $Data_Entrada = new Data();
    $Data_Entrada->dia = 9;
    $Data_Entrada->mes = 10;
    $Data_Entrada->ano = 2015;

    $user2->data_Entrada = $Data_Entrada;

    $Salario_Aumento = $user2->recebe_Aumento();
    $Salario_Anual = $user2->calcula_Ganho_Anual();
    print_r($user2);
    echo $user2;


