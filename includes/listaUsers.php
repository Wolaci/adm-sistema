<?php 

use \App\Session\Login;
$usuarioLogado = Login::getUserLogged();

$usuario = $usuarioLogado ? $usuarioLogado['name'].' <a class=" font-weight-bold ml-2" href="logout.php">Sair</a>' : '';

$lista = "";
foreach($users as $user => $rs)
$lista .= "<tr>
              <td>$rs->id</td>
              <td>$rs->name</td>
              <td>$rs->email</td>
              <td>$rs->cpf</td>
              <td>$rs->phone</td>
            </tr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuários</title>
  <?php require_once('templates/templateChamada.php'); ?>
</head>
<body>
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lista de usuários</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <?=$usuario?>

                    <div class="input-group-append">
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Usuário</th>
                      <th>E-mail</th>
                      <th>CPF</th>
                      <th>Telefone</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?= $lista; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
</body>
</html>