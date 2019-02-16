<?php
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];

    echo "Nome: ".$nome."<br>";
    echo "Endereço: ".$endereco."<br>";
    if($idade>=18) echo "Minha idade é: ".$idade."<br>";
    else echo "Você é menor de idade <br>";
    
    echo "Sexo:".$sexo;
?>

