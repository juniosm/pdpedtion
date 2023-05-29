<?php

require_once "./vendor/autoload.php";

$produto = new src\Model\Produto();
$produto->setId(4);
$produto->setNome("Cadeira");
$produto->setDescricao("Gamer");

$produtoDao = new src\Model\ProdutoDao();
$produtoDao->delete(4);
$produtoDao->read();

foreach ($produtoDao->read() as $produto) {
  echo $produto["nome"] . "<br>" . $produto["descricao"] . "<hr>";
}
