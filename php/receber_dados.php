<?php
require_once "conectar_banco.php";

$email = $_POST["email"];
$senha = $_POST["senha"];

function enviar_banco(){
    global $email, $senha, $mysqli;
    $ultimo_email = $email;
    $inserir = "INSERT INTO cadastros (Email, Senha) VALUES ('$email', '$senha')";
    $result = mysqli_query($mysqli, $inserir);
    
    header("Location: /teste04/index.php");
}

enviar_banco();