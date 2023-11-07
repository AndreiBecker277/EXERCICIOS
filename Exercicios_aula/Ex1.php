<?php
$Nome = $_POST["nomePrato"];
$pesokg = $_POST["peso"]; 
$Precokg = 21.50;

if(!empty($_POST["nomePrato"]) && isset($_POST["nomePrato"]) && !empty($_POST["peso"]) && isset($_POST["peso"]) ){
$pesagem = ($pesokg/1000)*$Precokg;
 echo "Nome: $nome - Valor Total - Dividido Por duas pessoas Custará R$".($pesagem/2);

}else{
    echo "Preencha os dados";
    header("refresh:3,form.php");
};
