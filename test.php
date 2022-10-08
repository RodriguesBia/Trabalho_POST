<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário (Unopar)</title>
</head>

<style>
    body{
        background-color: white;
    }
    section{
        background-color: black;
        color: white;
        margin: auto;
        text-align: center;
        width: 500px;
        padding: 20px;
        margin-top: 60px;
        border-radius: 50px;
    }
</style>
<body>
 <section>
<h1>Sistema de envio de formulário via POST</h1>

<h3>Seja bem-vindo(a)!</h3>
<h3>Você acessou o formulário corretamente</h3>
<p>Senha e usuário armazenados com sucesso</p>

</section>
<?php

 $password = $_POST['senha'];
 $user = $_POST['usuario'];

 /*echo "Usuário: " . $user . "<br/>";
 echo "Senha: " . $password; */

?>
    
</body>

</html>
