<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">     
<form action="respuesta.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombres</label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input type="text" name="lastname" class="form-control" id="exampleInputPassword1">
  </div>  
  <div class="form-group">
    <label for="exampleInputEmail1">Edad</label>
    <input type="number" name="age" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo Electronico</label>
    <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Grado</label>
    <input type="number" name="grado" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">    
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

    
</body>
</html>