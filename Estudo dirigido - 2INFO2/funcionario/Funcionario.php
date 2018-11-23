<?php
class Funcionario{

    public $departamento;
    public $salario;
    public $CPF;
    public $dataEntrada;

    public function recebe_Aumento(){
        $salario_Aumento = $this->salario + (0.1 * $this->salario);
        return $salario_Aumento;
    }

    public function calcula_Ganho_Anual(){
        $ganho_Anual = $this->salario * 12;
        return $ganho_Anual;
    }

    public function mostra(){
        return "O funcionário do departamento {$this->departamento}, funcionário desde {$this->dataEntrada->mostra()}, possui salário de R$ {$this->salario}";
    }

    public function __toString() {
        return $this->mostra();
    }
}

