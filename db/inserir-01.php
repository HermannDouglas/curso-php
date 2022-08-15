<div class="titulo">Inserir Registro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'Paulo Henrique',
    '1997-04-18',
    'paulohenrique@email.com.br',
    'https://paulohenrique.sites.com.br',
    4,
    18010.03
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso :)";
} else {
    echo "Error " . $conexao->error;
}

$conexao->close();

?>