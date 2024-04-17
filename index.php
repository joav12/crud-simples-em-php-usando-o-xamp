<?php 
    include ("phps/conectaDB.php"); 
    include("phps/validaLogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<title>Xamp</title>
</head>
<body>
<div class="container">
    <h1>Faça login</h1>

    <form action="http://localhost/clientes/" method="post" class="formulario">
        <h1 style='color: red'><?php print($resul) ?></h1>

        <div class="mb-3">
            <label for="login" class="form-label">Login:</label>
            <input type="text" name="login" id="login" class="form-control">
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha:</label>
            <input type="password" name="senha" id="senha"  class="form-control">
        </div>

        <input type="submit" class='btn btn-primary' value="Entrar">
    </form>   
</div>
</body>
</html>