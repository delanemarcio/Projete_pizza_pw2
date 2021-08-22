<?php

require_once 'Pizzaria.php';

class TipoPizzas extends Pizzaria
{
    protected $table = 'tipoPizzas';
    private $nome;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function insert()
    {
        $sql  = "INSERT INTO $this->table (nome) VALUES (:nome)";
        $stmt = Conexao::prepare($sql);

        $stmt->bindValue(':nome', $this->nome);

        return $stmt->execute();
    }

    public function update($id)
    {
        $sql  = "UPDATE $this->table SET nome = :nome WHERE id = :id";
        $stmt = Conexao::prepare($sql);

        $stmt->bindValue(':nome', $this->nome);
        $stmt->bindValue(':id', $id);

        return $stmt->execute();
    }

}
