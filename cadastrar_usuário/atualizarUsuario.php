<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Atualização de Usuário</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'usuario') or die ('Ocorreu um erro ao conectar com o banco de dados');
            $query = 'SELECT * FROM usuario WHERE id =' . $_GET['id'];
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
    </head>

    <body>
        <div class="container mt-5 card-header">
            <h1 class="mb-5">Atualização de Usuário</h1>
            <form action="acao/Atualizar.php" method="POST">
                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" name="id" value=<?php echo $row['id'] ?> readonly id="id">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="user">Usuário</label>
                            <input type="text" class="form-control" name="user" value=<?php echo $row['usuario'] ?> id="user">
                        </div>

                        <div class="form-group col-md-7">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="name" id="name" value=<?php echo $row['nome'] ?> />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="datanascimento">Data de Nascimento</label>
                            <input type="date" class="form-control" name="datanascimento" value=<?php echo $row['data_nasc'] ?> id="data-nascimento">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="cpf" value=<?php echo $row['cpf'] ?>>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="perfil">Perfil</label>
                            <input type="text" class="form-control" name="perfil" value=<?php echo $row['perfil'] ?> id="perfil">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>