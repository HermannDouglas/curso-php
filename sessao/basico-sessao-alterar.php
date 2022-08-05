<?php
session_start();
print_r($_SESSION);

?>

<?php
$_SESSION['email'] = 'hermann.douglas@ymail.com';
?>

<p>
    <b>Nome: </b> <?= $_SESSION['nome'] ?> <br>
    <b>Email: </b> <?= $_SESSION['email'] ?>
</p>

<p>
    <a href='/curso-PHP/sessao/basico-sessao.php'>Voltar</a>
</p>
<p>
    <a href='/curso-PHP/sessao/basico-sessao-limpar.php'>Limpar Sessão</a>
</p>