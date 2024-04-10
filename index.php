<?php 
    include ("phps/conectaDB.php");  
    include("phps/preencheDeleta.php");
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
            <input type="text" name="nome" id="nome" <?php isset($nomeUpdate) ? print('value="' . $nomeUpdate .'"') : '' ?> class="form-control">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço:</label>
            <input type="text" name="endereco" id="endereco" <?php isset($enderecoUpdate) ? print('value="' . $enderecoUpdate .'"') : '' ?>  class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail:</label>
            <input type="email" name="email" id="email"  <?php isset($emailUpdate) ? print('value="' . $emailUpdate .'"') : '' ?> class="form-control">
        </div>

        <?php if(isset($nomeUpdate)){ ?>
            <input type="number" name="idUP" value='<?php print($idup) ?>' style='display: none'>

            <div class="mb-3 btn-container">
                <input type="submit"  id='reload' name='reload' value="salvar" class="btn btn-primary">
            </div>
        <?php } else{ ?>
            <div class="mb-3 btn-container">
                <input type="submit" value="Enviar" name='envia' class="btn btn-primary">
            </div>
        <?php } ?>     
    </form>

        <div class="listaClientes">
            <form action="http://localhost/clientes/" method='post'>
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
                                "<td> <input type='submit' value='deletar " . $cliente['CLIENTE_ID'] . "' name='deleta' class='btn btn-danger'> <input type='submit' value='atualiza ". $cliente['CLIENTE_ID'] ."' name='atualiza' class='btn btn-secondary'> </td>".
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