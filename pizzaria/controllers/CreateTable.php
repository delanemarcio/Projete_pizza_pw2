<?php

include_once "./Conexao.php";

$sql = ' CREATE TABLE IF NOT EXISTS tipoPizzas( 
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    nome varchar(200) NOT NULL );
CREATE TABLE IF NOT EXISTS pizzas(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(200) NOT NULL,
    descricao varchar(200) NOT NULL,
    valor DECIMAL(5,2) NOT NULL,
    id_tipo_pizza int,
    CONSTRAINT fk_pizzas_tipoPizzas
        FOREIGN KEY (id_tipo_pizza) REFERENCES tipoPizzas(id)
);';


try {
    $conexao = Conexao::getInstance();
    $conexao->exec($sql);
    // $conexao->exec($sql1);
    echo "sucesso";
}catch(PDOException $err) {
    echo "ERROR" . $err->getMessage();
}
