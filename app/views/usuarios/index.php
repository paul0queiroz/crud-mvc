<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <nav class="nav navbar-light bg-light">
        <a href="#" class="navbar-brand">
            <img src="/docs/5.3/assets/brand/bootstrap-solid.svg"  width="30" height="30" class="d-inline-block align-top" alt="">
        </a>
    </nav>
    <div class="container mt-5">
        <h2>Lista de Usuários</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Profissão</td>
                    <td>Telefone para contato:</td>
                    <td>Telefone Celular:</td>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($usuarios as $usuario) : ?>
                    <tr>
                        <td><?= $usuario["id"] ?></td>
                        <td><?= $usuario["nome"] ?></td>
                        <td><?= $usuario["email"] ?></td>
                        <td><?= date("d/m/Y", strtotime($usuario["criado_em"]))?></td>
                        <td><?= $usuario["telefone_contato"] ?></td>
                        <td><?= $usuario["telefone_celular"] ?></td>
                        <td><?= $usuario["profissão"] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>