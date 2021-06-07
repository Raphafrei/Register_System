<!DOCTYPE html>
<html lang="pt-br">

<style>
body {
  background-image: url('3302887.jpg');
}
</style>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Cadastros!</title>
</head>
<body>
    <div class="container content">

        </br><h1>Tabela de Cadastros!</h1> </br>
    </div>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

    <form action="login.php" method="post">

<div class="container">
    <div class="row">    
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Cadastrados</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <button type="submit" class="btn btn-sm btn-primary btn-create">Criar novo</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th class="hidden-xs">Nome</th>
                        <th>Sobrenome</th>
                        <th>Idade</th>
                        <th>Excluir</th>
                    </tr> 
                  </thead>
                  <tbody>
                                    <?php
                                            //Dados do server
                                            $servername = "Localhost";
                                            $username = "root";
                                            $password = "";
                                            $dbname = "acesso";

                                            //Conectar no server
                                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                                            
                                            $sql = "SELECT * FROM cadastro";
                    
                                            $resultado = mysqli_query($conn, $sql);
                                            
                                                while ($pessoa = mysqli_fetch_array($resultado)){
                                                    $nome = $pessoa['nome'];
                                                    $sobrenome = $pessoa['sobrenome'];
                                                    $idade = $pessoa['idade'];
                                                    echo "<tr><td>$nome</td>
                                                    <td>$sobrenome</td>
                                                    <td>$idade</td>
                                                    <td><a class='btn btn-small btn-danger btn-block' href='excluir.php?nome=$nome&sobrenome=$sobrenome&idade=$idade'>Excluir</a></td>
                                                    </tr>";
                                                }
                                                
                                            //Fechar conexão
                                            mysqli_close($conn);
                                            
                                            
                                                
                                            
                                    ?>
                        </tbody>
                </table>
            
              </div>
            </div>

</div></div></div></div>
				
    

</body>
</html>