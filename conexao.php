<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cybersecurity";

$conexao = new mysqli($host, $usuario, $senha, $banco);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_errno);
}
?>