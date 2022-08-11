<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulário</div>

<h2>Cadastro</h2>

<?php
if(count($_POST) > 0){
    // isset($_POST['nome'])
    if(!filter_input(INPUT_POST, "nome")){
        echo 'Nome é obrigatório', '<br>';
    }

    if(filter_input(INPUT_POST, "nascimento")){
        $data = DateTime::createFromFormat('d/m/Y', $_POST['nascimento']);
        if(!$data){
            echo 'Data deve estar no padrão dd/mm/aaaa', '<br>';
        }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo 'Email inválido', '<br>';
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)){
        echo 'Site inválido', '<br>';
    }

    $filhosConfig = [
        "options" => ["min_range" => 0, "max_range" => 20]
    ];
    if(!filter_var($_POST['filhos'], FILTER_VALIDATE_INT, $filhosConfig && $_POST['filhos'] != 0)){
        echo 'Quantidade de filhos inválida', '<br>';
    }

    $salarioConfig = ['options' => ['decimal' => ',']];
    if(!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)){
        echo 'Salário inválido', '<br>';
    }
}
?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
                id="nome" name="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Nascimento</label>
            <input type="text" class="form-control"
                id="nascimento" name="nascimento" placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control"
                id="email" name="email" placeholder="E-mail"
                value="<?= $_POST['email'] ?>>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control"
                id="site" name="site" placeholder="Site"
                value="<?= $_POST['site'] ?>>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="quantidade de filhos">Quantidade de filhos</label>
            <input type="number" class="form-control"
                id="quantidade de filhos" name="quantidade de filhos" placeholder="Quantidade de filhos"
                value="<?= $_POST['quantidade de filhos'] ?>>
        </div>
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text" class="form-control"
                id="salario" name="salario" placeholder="Salário"
                value="<?= $_POST['salario'] ?>>
        </div>
    </div>
    <button>Enviar</button>
</form>