<?php

require_once 'Conexao.php';

abstract class Pizzaria extends Conexao
{
    protected $table;

    abstract public function insert();
    abstract public function update($id);

    public function find($id)
    {
        $sql  = "SELECT * FROM $this->table WHERE id = :id";
        $stmt = Conexao::prepare($sql);

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }

    public function findAll()
    {
        $sql  = "SELECT * FROM $this->table";
        $stmt = Conexao::prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function delete($id)
    {
        $sql  = "DELETE FROM $this->table WHERE id = :id";
        $stmt = Conexao::prepare($sql);

        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }
}
