<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <title>Trocar a senha</title>


    <style>
        body{
            background-color: #008080;
        }
        .login{
            width: 400px;
            height: auto;
            margin: 5% 0 0 38%;
        }
        p{
            font-size: 30px;
            color: white;
        }
        label{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 18px;
            color: #FFFFFF;

        }
        input{
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            font-size: 20px;
            box-sizing: border-box;
        }
        input::placeholder{
            color: lightgrey;
        }
        input:focus{
            outline: none;
            border: 2px solid blue;
        }
        h1, h2, h3, h4{
            text-align: center;
            color: #FFFFFF;
        }
        a{
            font-size: 20px;
            text-decoration: none;
            color: #FFFFFF;
        }
        a:hover{
            color: #f8b052;
        }
        .erro{
            color: #FFFFFF;
            width: 100%;
            height: 30px;
            background-color: red;
        }
        .botao:hover{
            background-color: #005050;
            color: #f8b052;
            cursor: pointer;
        }
        .sucesso{
            background-color: darkgreen;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>

    <hr>
    <h1>Trocar Senha</h1>
    <hr>
    <div class="senha">
        <form action="cadastrar_nova_senha.php" method="post">
            <div class="row g-3 login">
                <div class="col-12">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required placeholder="Usuário:">
                </div>
                <div class="col-12">
                    <label for="docto" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="docto" name="docto" required placeholder="CPF:">
                </div>
                <div class="col-12">
                    <label for="data_nasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data_nasc" name="data_nasc" placeholder="Data de Nascimento:" required>
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Digite a nova senha</label>
                    <input type="password" class="form-control" id="password" name="nova_password" placeholder="Digite a nova senha:" required>
                </div>
                <div class="col-12">
                    <label for="conf_password" class="form-label">Confirme sua senha</label>
                    <input type="password" class="form-control" id="conf_password" name="conf_nova_password" placeholder="Confirme sua nova senha:" required>
                </div>

                <div class="col-12">
                    <input type="submit" class="btn-solid theme-primary botao" value="Cadastrar no senha">
                </div>

            </div>
        </form>
    </div>


    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>
