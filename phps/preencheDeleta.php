<?php
if (isset($_POST['envia'])){
    $sql = 'INSERT INTO `cliente` (`CLIENTE_ID`, `NOME`, `ENDERECO`, `EMAIL`) VALUES (NULL, "' . $_POST['nome'] . '", "' .$_POST['endereco'] . '", "' . $_POST['email'] . '");';
    
    $conexao -> query($sql);
}
else{
    $aviso = 'Preencha todos os espaços';
}

if(isset($_POST['atualiza'])){
    $idUp = explode(" ", $_POST['atualiza']);

    $sql = 'SELECT * FROM `cliente` WHERE CLIENTE_ID = ' . $idUp[1] . ';';
    
    $dadosUp = $conexao -> query($sql);

    session_start();

    foreach($dadosUp as $cliente){
        $idup = $cliente['CLIENTE_ID'];
        $nomeUpdate = $cliente['NOME'];
        $enderecoUpdate = $cliente['ENDERECO'];
        $emailUpdate = $cliente['EMAIL'];
    }  
}

if(isset($_POST["reload"])){
    $sql = 'UPDATE `cliente` SET `NOME` = "' . $_POST['nome'] . '", `ENDERECO` = "' . $_POST['endereco'] . '", `EMAIL` = "' . $_POST['email'] . '" WHERE `cliente`.`CLIENTE_ID` = ' . $_POST["idUP"] . ';';

    $conexao -> query($sql);
}

if(isset($_POST['deleta'])){
    $idDel = explode(" ", $_POST['deleta']);

    $sql = "DELETE FROM cliente WHERE `cliente`.`CLIENTE_ID` = " . $idDel[1] . "";
    
    $conexao -> query($sql);
}