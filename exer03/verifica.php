<?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    echo "Nome: ".$nome."<br>";
    echo "Endereço: ".$endereco."<br>";
    if($idade>=18) echo "Você é maior de idade: ".$idade."<br>";
    else echo "Você é menor de idade: ".$idade."<br>";
    
    echo "Sexo:".$sexo;
?>

