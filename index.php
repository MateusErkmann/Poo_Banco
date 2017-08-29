<?php

require 'classes/Conta.php';

$minhaConta = new Conta();

$minhaConta->dono = "Eu";
$minhaConta->numeroConta = "123";
$minhaConta->saldo = 500.00;

$minhaConta->deposita(1050);
$conseguiSacar = $minhaConta->saca(1350);

if ($conseguiSacar){
    echo "Consegui Sacar \n";
}
else{
    echo "Saldo Insuficiente! \n";
}

echo "O cliente $minhaConta->dono possui saldo de $minhaConta->saldo";



