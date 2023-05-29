<?php

namespace src\Model;

class Produto
{
  private $id, $nome, $descricao;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    return $this->id = $id;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($n)
  {
    return $this->nome = $n;
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function setDescricao($d)
  {
    return $this->descricao = $d;
  }
}
