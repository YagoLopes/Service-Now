<?php
// arquivo de inserção de dados
include("conexao.php");
$recnome=$_POST["nome"];
$recemail=$_POST["email"];
$recfone=$_POST["fone"];

mysqli_query($conexao, "insert into visitantes (id,nome,email,telefone) values (default,'$recnome','$recemail','$recfone')");
header("location:cad.html");
?>
