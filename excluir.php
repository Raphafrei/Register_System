<!DOCTYPE html>
<html lang="pt-br">

<style>
body {
  background-image: url('3298668.jpg');
}
</style>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Usuário!</title>
</head>
<body>
    <div class="container content">
    <form action="cadastros.php" method="post">

        </br><h1>Excluido com Sucesso!</h1> </br>

        <?php

            //Variaveis de Login
            $servername = "Localhost";
            $username = "root";
            $password = "";
            $dbname = "acesso";

            $conn = mysqli_connect($servername, $username, $password, $dbname);

            //Dados
            $nome = $_GET['nome'];
            $sobrenome = $_GET['sobrenome'];
            $idade = $_GET['idade'];

            $sql = "DELETE FROM cadastro WHERE nome = '$nome' AND sobrenome = '$sobrenome' AND idade = $idade OR nome = '' AND sobrenome = '' AND idade = ''";
            
            mysqli_query($conn, $sql);

            //Fechar conexão
            mysqli_close($conn);

        ?>

        <br><br><br>
        <button href='login.php' class="btn btn-outline-dark btn-block">CADASTRAR NOVO USUÁRIO</button>
        <button class='btn btn-small btn-outline-danger btn-block' href='cadastros.php'>VOLTAR PARA CADASTROS</button>
    </div>
				
    

</body>
</html>