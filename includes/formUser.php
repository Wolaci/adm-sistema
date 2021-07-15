<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Usuários</title>
</head>
<body>
  <h1>Usuários</h1>
  <form method="post">
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputPassword4">Nome</label>
      <input type="text" name="name" class="form-control" id="inputPassword4" placeholder="Nome">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
  </div>
  <!-- <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div> -->
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</body>
</html>