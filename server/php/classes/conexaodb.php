<?php

class db
{

    protected function conexaodb()
    {

        $dsn = 'localhost';
        $user = 'root';
        $pass = '';


        //FAZ O TRATAMENTO DO PDO Exception
        try {

            $pdo = new PDO($dsn, $user, $pass); //-------- CONEXÃO COM O BANCO

            return $pdo;
        } catch (PDOException $ex) {

            echo 'Erro: ' . $ex->getMessage();
        }
    }
}
