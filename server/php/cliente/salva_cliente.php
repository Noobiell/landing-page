<?php

include '../classes/cliente.php';



//VERIFICA SE TODOS OS PARAMETROS NECESSÁRIOS EXISTEM
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['celular'])) {

    //VERIFICA SE O CELULAR POSSUI 11 CARACTERES
    if (strlen($_POST['celular']) == 11) {

        //INSTANCIA A CLASSE E REALIZA A CONSULTA E CADASTRO
        $obj = new Cliente();

        echo $obj->verificaCliente($_POST);
    } else {

        echo json_encode(array("erro" => false, "mensagem" => "Número de celular inválido"));
    }
} else {

    echo json_encode(array("erro" => true, "mensagem" => "Não foi possivel completar o cadastro, pois não ha todas as informações"));
}
