<?php

require_once 'Pizzaria.php';

class Pizzas extends Pizzaria
{
    protected $table = 'pizzas';
    private $nome;
    private $descricao;
    private $valor;
    private $tipoPizza;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTipoPizza($tipoPizza)
    {
        $this->tipoPizza = $tipoPizza;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function insert()
    {
        try {
            $sql  = "INSERT INTO $this->table (nome, descricao, valor, id_tipo_pizza) VALUES (:nome, :descricao, :valor, :tipoPizza)";
            $stmt = Conexao::prepare($sql);

            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':descricao', $this->descricao);
            $stmt->bindValue(':valor', $this->valor);
            $stmt->bindValue(':tipoPizza', $this->tipoPizza);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function update($id)
    {
        try {
            $sql  = "UPDATE $this->table SET nome = :nome, descricao = :descricao, valor = :valor, id_tipo_pizza = :tipoPizza WHERE id = :id";
            $stmt = Conexao::prepare($sql);

            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':descricao', $this->descricao);
            $stmt->bindValue(':valor', $this->valor);
            $stmt->bindValue(':tipoPizza', $this->tipoPizza);
            $stmt->bindValue(':id', $id);

            return $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
