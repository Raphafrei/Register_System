<!DOCTYPE html>
<html lang="pt-br">

<style>
body {
  background-image: url('894988.jpg');
}
</style>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Criado!</title>
</head>
<body>
    <div class="container content">
    <form action="cadastros.php" method="post">

        </br><h1>Cadastrado com Sucesso!</h1> </br>

        <?php

            //Variaveis de Login
            $servername = "Localhost";
            $username = "root";
            $password = "";
            $dbname = "acesso";

            //Conectar no server
            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Checar conexão
            if (mysqli_connect_error($conn)) {
            die("Connection failed: " . mysqli_connect_error());
            }else{
            //echo  "Conexão com Sucesso!";
            }

            //Dados
            $nome = $_POST["name"];
            $sobrenome = $_POST["lastname"];
            $idade = $_POST["age"];

            if($nome == '')
                $nome = "John";
            if($sobrenome == '')
                $sobrenome = "Wick";
            if($idade == '')
                $idade = 30;

            echo "<div class='text-monospace'>
                Nome: $nome</div>
            <div class='text-monospace'>
                Sobrenome: $sobrenome</div>
            <div class='text-monospace'>
                Idade: $idade</div>
            ";

            //Inserir na tabela
            $dados = "INSERT INTO cadastro VALUES ('$nome', '$sobrenome', '$idade')";
            mysqli_query($conn, $dados);

            //Fechar conexão
            mysqli_close($conn);

        ?>

        <br><br><br>
        <button type="submit" class="btn btn-outline-dark">CADASTROS</button>
        <a href="login.php" class="btn btn-outline-danger">CADASTRAR OUTRO</a>

    </div>
				
    

</body>
</html>