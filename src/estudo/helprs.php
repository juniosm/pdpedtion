<?php

$tempo = "relativo";
$espaco = "ponto de analise";
$number = 20;
$num = 10;

define("MOOD", "Alastor");

echo "O $espaco é $tempo para o observador, onde não se configura referencial absoluto. " .
  MOOD;

echo "<hr>";

echo gettype("Tempo");

echo $number + $num;

function abrir(): string
{
  return "s";
}

echo "<hr>";

if ($num <= $number) {
  echo "$num é menor que $number ";
}

var_dump(!!null);

echo "<hr>";

$data = ["tempo", "espaço", "gravidade"];

var_dump($data);
$person = ["nome" => "James", "age" => 23];

var_dump($person["nome"]);

echo "<hr>";

$change = (object) $person;

var_dump($change->nome);

// for ($i = 0; $i < 10; $i++) {
//   echo $i;
// }

echo "<hr>";

$acati = function () {};
var_dump($acati);

echo "<hr>";
function teste($name)
{
  return "teste $name";
}

function teste2($callback)
{
  return $callback("Alex");
}

echo teste2("teste");

setcookie("curso", "PHP", strtotime("5days"));

$_COOKIE;

echo "<hr>";

session_start();

echo $_SESSION["name"] = "Jdsains";

class Pesssoa
{
  public $nome;
  public $idade;

  public function Falar()
  {
    echo $this->nome . " de " . $this->idade . " anos";
  }
}

$terry = new Pesssoa();
$terry->nome = "Terry da Silva";
$terry->idade = 40;
$terry->Falar();

echo "<hr>";

class Login
{
  private $email;
  private $senha;
  private $nome;

  public function __construct($email, $senha, $nome)
  {
    $this->nome = $nome;
    $this->setEmail($email);
    $this->setSenha($senha);
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($e)
  {
    $this->email = $e;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setSenha($s)
  {
    return $this->senha = $s;
  }

  public function Logar()
  {
    if ($this->email === "teste@gmail.com" && $this->senha === "123456") {
      return "Login realizado com sucesso";
    }
  }
}

$logar = new Login("teste@gmail.com", "123456", "Rifre");
echo $logar->Logar();
echo "<br>";
echo $logar->getNome();

class Veiculo
{
  private $modelo;
  protected $cor;
  public $ano;

  public function Andar()
  {
    echo "Andou";
  }

  public function Parou()
  {
    echo "Parou";
  }

  public function getModelo()
  {
    $this->modelo;
  }

  public function setModelo($m)
  {
    $this->cor = $m;
  }
}

class Carro extends Veiculo
{
  public function getCor()
  {
    $this->modelo;
  }

  public function setCor($c)
  {
    $this->cor = $c;
  }
}

abstract class Banco
{
  protected $saldo;
  protected $limite;
  protected $juros;

  public function setSaldo($s)
  {
    $this->saldo = $s;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  abstract protected function Sacar($s);
  abstract protected function Depositar($d);
}

class Itau extends Banco
{
  public function Sacar($s)
  {
    $this->saldo -= $s;
    echo "saldo conta";
  }
  public function Depositar($d)
  {
    $this->saldo += $d;
  }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo:" . $itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo:" . $itau->getSaldo();

class Pesssoas
{
  const nome = "Rodrigo";

  public function exibirNome()
  {
    echo self::nome;
  }
}

class Rodrigo extends Pesssoas
{
  const nome = "Oliveira";

  public function exibirNome()
  {
    echo parent::nome;
  }
}

$nome = new Rodrigo();
$nome->exibirNome();

echo "<hr>";

class Logins
{
  public static $user;

  public static function verificarLogin()
  {
    echo "O usuario " . self::$user . " está Logado";
  }
}

Logins::verificarLogin();

interface Crud
{
  public function create();
  public function read();
  public function upadate();
  public function delete();
}

class Noticias implements Crud
{
  public function create()
  {
    echo "create";
  }
  public function read()
  {
    echo "read";
  }
  public function upadate()
  {
    echo "update";
  }
  public function delete()
  {
    echo "delete";
  }
}

// namespace models;

// class Produto
// {
//   public function mostrarDetalhes()
//   {
//     echo "Mostar detalhes de models";
//   }
// }

// use models\Produto as productModel;

// $produto = new productModel();
// $produto->mostrarDetalhes();

echo "<hr>";

class People
{
  public $idade;

  public function __clone()
  {
    echo "limpo";
  }
}

$people = new People();
echo $people->idade = 35;

$pessoa2 = clone $people;
echo $people->idade = 25;

class Newletter
{
  public function cadastrarEmail($email)
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception("Error Processing Request", 221);
    } else {
      echo "Email cadastrado";
    }
  }
}
echo "<br>";
$newletter = new Newletter();
try {
  $newletter->cadastrarEmail("cato@");
} catch (Exception $e) {
  echo $e->getMessage() . "<br>";
  echo $e->getCode() . "<br>";
  echo $e->getLine() . "<br>";
  echo $e->getFile();
}

class Pedido
{
  public $numero;
  public $cliente;
}

class Cliente
{
  public $nome;
  public $endereco;
}

$cliente = new Cliente();
$cliente->nome = "Josefa";
$cliente->endereco = "Rua tal, n: 12";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = [
  "numero" => $pedido->numero,
  "nome_cliente" => $pedido->cliente->nome,
  "endereco_cliente" => $pedido->cliente->endereco,
];

echo "<hr>";

class Produtos
{
  public $nome;
  public $valor;

  function __construct($nome, $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor;
  }
}

class Carrinho
{
  public $produtos;

  public function adiciona(Produtos $produtos)
  {
    $this->produtos[] = $produtos;
  }

  public function exibe()
  {
    foreach ($this->produtos as $produto) {
      echo $produto->nome . "<br>";
      echo $produto->valor . "<hr>";
    }
  }
}

$produto1 = new Produtos("Notebook", "3500");
$produto2 = new Produtos("celular", "1500");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();

echo "<hr>";

class Pessoa
{
  public function atribuiNome($nome)
  {
    return "O nome da pessoa é " . $nome;
  }
}

class Exibir
{
  public $pessoa;
  public $nome;

  function __construct($nome)
  {
    $this->pessoa = new Pessoa();
    $this->nome = $nome;
  }

  public function exibeNome()
  {
    echo $this->pessoa->atribuiNome($this->nome);
  }
}

$exibe = new Exibir("Jão");
$exibe->exibeNome();