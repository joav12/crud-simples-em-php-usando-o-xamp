<?php

$aviso = '';

function adiciona(){
    if (isset($_POST['nome'], $_POST['endereco'], $_POST['email'])){
        $sql = 'INSERT INTO `cliente` (`CLIENTE_ID`, `NOME`, `ENDERECO`, `EMAIL`) VALUES (NULL, "' . $_POST['nome'] . '", "' .$_POST['endereco'] . '", "' . $_POST['email'] . '");';
    
        $conexao -> query($sql);
    
        $aviso = '';
    
        $_POST['nome'] = null;
        $_POST['endereco'] = null;
        $_POST['email'] = null;
        
        }
    else{
        $aviso = 'Preencha todos os espaços';
    }
}

function deleta($id){
    $sql = "DELETE FROM cliente WHERE `cliente`.`CLIENTE_ID` = " . $id . "";

    $conexao -> query($sql);
}

if(isset($_POST['id'])){
    deleta($_POST['id']);
}


