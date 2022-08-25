<div class="titulo">PDO: Alterar</div>

<?php
require_once "conexao_pdo.php";

$sql = "UPDATE cadastro 
        SET nome = ?, nascimento = ?, email = ?, site = ?, filhos = ?, salario = ?
        WHERE id = ?";
$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute(
    [
        'Gui',
        '1989-12-11',
        'gui@xmail.com.br',
        'https://gui.site.com.br',
        1,
        12000.23,
        5
    ]
);

if($resultado) {
    echo "Sucesso :)";
} else {
    print_r($stmt->errorInfo());
}

?>