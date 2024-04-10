<?php 
    include ("phps/conectaDB.php");  
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
    <h1>Cadastre o cliente </h1>

    <form action="http://localhost/clientes/" method="post" class="formulario">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" name="endereco" id="endereco" class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="mb-3 btn-container">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>
    

    <?php include ("phps/preencheDeletaDB.php");  ?>

        <div class="listaClientes">
            <form action="">
            <h1>Lista de clientes</h1>
    	    <table class="table">
                <?php if ($dados->num_rows <= 0){ ?>
                    <p>Não existem clientes informados para serem listadas.</p>              
                
                    <?php }else{ ?>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Endereco</th>
                                <th>E-mail</th>
                                <th>ações</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php foreach($dados as $cliente) { 
                            echo 
                             "<tr>".
                                "<td>". $cliente['CLIENTE_ID'] ."</td>".
                                "<td>". $cliente['NOME'] ."</td>".
                                "<td>". $cliente['ENDERECO'] ."</td>".
                                "<td>". $cliente['EMAIL'] ."</td>".
                                "<td> <button id='" . $cliente['CLIENTE_ID'] . "' class='btn btn-danger delete'>Deletar Cliente</button> <button id='" . $cliente['CLIENTE_ID'] . "' class='btn btn-secondary update'>Editar Cliente</button>  </td>".
                             "</tr>";                                
                        }}; ?>            
                    </tbody>
            </table>
            </form>

        </div>
    </div>
</div>
</body>
</html>