<?php


namespace cconexao;


final class Conexao
{
    private static $instance = null;
    private function __construct(){}
    private function __clone(){}

    // m�todo de conex�o
    public static function conectar() {
        if (!isset(self::$instance)) {
            // conex�o n�o existe, ent�o cria
            try {
                self::$instance = new PDO("pgsql:host=localhost;dbname=semanaacad", // url
                    "postgres", // usu�rio
                    "postgres" // senha
                );
                self::$instance->setAttribute(
                    PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
                );
            } catch(PDOException $e) {
                echo "Erro na conex�o: " .
                    $e->getMessage();
            }
        }

        return self::$instance;
    }
}