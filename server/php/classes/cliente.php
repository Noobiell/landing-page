<?php

include 'conexaodb.php';

class Cliente extends db
{

    public function verificaCliente($cliente)
    {

        $conn = $this->conexaodb();

        $sqlSelect = "SELECT * FROM clientes_ir WHERE nome_completo = ? AND email = ? AND celular = ?";

        $stmt = $conn->prepare($sqlSelect);

        $stmt->bindParam(1, $cliente['nome']);
        $stmt->bindParam(2, $cliente['email']);
        $stmt->bindParam(3, $cliente['celular']);

        if ($stmt->execute()) {

            $result = $stmt->fetchAll();

            if (sizeof($result) > 0) {

                return json_encode(array("erro" => false, "mensagem" => "Cliente ja cadastrado em nosso sistema"));
            } else {

                return $this->cadastraCliente($cliente);
            }
        } else {

            return json_encode(array("erro" => true, "mensagem" => "Erro ao consultar cliente"));
        }
    }

    private function cadastraCliente($cliente)
    {

        $conn = $this->conexaodb();

        $sqlInsert = "INSERT INTO clientes_ir(nome_completo, email, celular, data_cadastro) VALUES(?, ?, ?, NOW())";

        $stmt = $conn->prepare($sqlInsert);

        $stmt->bindParam(1, $cliente['nome']);
        $stmt->bindParam(2, $cliente['email']);
        $stmt->bindParam(3, $cliente['celular']);

        if ($stmt->execute()) {

            return json_encode(array("erro" => false, "mensagem" => "Cliente cadastrado com sucesso"));
        } else {

            return json_encode(array("erro" => true, "mensagem" => "Erro ao cadastrar cliente"));
        }
    }
}
