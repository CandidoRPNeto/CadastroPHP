<?php
$hostname = "localhost";
$bancodados = "usuarios";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname,$usuario,$senha,$bancodados);
if ($mysqli->connect_errno){
    echo $mysqli->connect_errno;
}