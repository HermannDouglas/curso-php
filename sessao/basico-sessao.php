<div class="titulo">Sessão</div>

<?php
session_start();

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Hermann';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'hermann.almeida@zmail.com';
}

print_r($_SESSION);

?>

<p>
    <a href="/curso-PHP/sessao/basico-sessao-alterar.php">Alterar Sessão</a>
</p>