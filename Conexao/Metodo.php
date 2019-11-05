<?php
namespace cmetodo;
use cbase\Base;

require 'Base.php';

class Metodo extends Base
{
    public function buscarAnimalPorId($id)
    {
        try {
            $sql = $this->conexao->prepare("select * from Tabela_Animal where id = ?");
            $sql->execute($id);
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

    public function buscarTodosAnimais()
    {
        try {
            $sql = $this->conexao->prepare("select * from Tabela_Animal");
            $sql->execute();
            $dados = $sql->fetch();
            return $dados;
        } catch (PDOException $e) {
            echo "Erro: " . $e->getMessage();
        }
    }

}