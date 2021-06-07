<!DOCTYPE html>
<html lang="pt-br">

<style>
body {
  background-image: url('787.jpg');
}
</style>

<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>

	<div class="container content">

    <form action="login_cadastrado.php" method="post">

			<div class="form-content">
            </br><h1>Cadastro de Usuário</h1> </br>
			<h4>Preencha os dados com suas informações</h4>
				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2">Nome</span>
				  </div>
				  <input type="text" name="name" class="form-control" aria-label="name" aria-describedby="basic-addon2">
				</div>

				<div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon2">Sobrenome</span>
				  </div>
				  <input type="text" name="lastname" class="form-control" aria-label="name" aria-describedby="basic-addon2">
				</div>

                <div class="input-group mb-3">
				  <div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">Idade</span>
				  </div>
				  <input type="number" name="age" class="form-control" aria-label="name" aria-describedby="basic-addon1">
				</div>

				<div class="input-group mb-3">
					<button type="submit" class="btn btn-outline-success">ENVIAR</button>
                    <pre class="tab">   </pre>
                    <button type="reset" class="btn btn-outline-danger">LIMPAR</button>
					<pre class="tab">   </pre>
                    <a class="btn btn-outline-info" href="cadastros.php">CADASTROS</a>
				</div>

			</div>
		</div>
    
</body>
</html>