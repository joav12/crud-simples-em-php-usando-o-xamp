<?php
$resul = '';

if(isset($_POST['login'])){
    $sql = 'SELECT * FROM `usuario` WHERE login = "' . $_POST['login'] . '" AND senha = "' . $_POST['senha'] . '"';

	$dados = $conexao -> query($sql);

    if($dados->num_rows <= 0){
        $resul = 'Login e/ou senha incorretos';
    }
    else{
        header ("location: http://localhost/clientes/lista.php?userName=". $_POST['login']);
    }

    foreach($dados as $usuarios){
        echo '<pre>',print_r($usuarios,1),'</pre>';
    }
}

    // if(isset($_POST['login'])){
    //     foreach($dados as $usuarios){
    //         if($_POST['login'] == $usuarios['login']){
    //             if($_POST['senha'] == $usuarios['senha']){
    //                 header ("location: http://localhost/clientes/lista.php");
    //             }
    //             else{
    //                 $resul = 'Login e/ou senha incorretos';
    //             }
    //         }
    //         else{
    //             $resul = 'Login e/ou senha incorretos';
    //         }
    //     }
    // }
