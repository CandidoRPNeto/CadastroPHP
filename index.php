<?php 
    require_once "php/conectar_banco.php";
    $query = "SELECT * FROM cadastros";
    $lista = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Cadastro</title>
    </head>
    <body>
        <div class="card px-1 py-4">
            <div class="card-body-form">
                <h1>Se cadstre no sistema</h1>
                <form class="row g-3" method="POST" action="php/receber_dados.php">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha" minlength="8" name="senha" required>
                        <label for="floatingPassword">Senha</label>
                    </div>
                    <div class="col-12">
                        <button name="enviar" type="submit" class="btn btn-primary" value="click">Enviar</button>
                    </div>
                </form>
            </div>
        <div class="card-body-table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Emails Salvos</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $id_number = 1;
                        while($user = mysqli_fetch_assoc($lista)){
                            echo "<tr><th>$id_number</th><td>".$user['Email']."</td></tr>";
                            $id_number++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>