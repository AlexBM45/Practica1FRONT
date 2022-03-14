<?php
  $bbdd = 'oradores';
  include 'conexion.php';

  $consulta = 'SELECT * FROM registro';
  $datos = mysqli_query($conexion,$consulta);

  mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Lista de oradores</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <div>
          <img src="./IMG/codoacodo.png" alt="logo_codoAcodo" width="100">
          <a class="navbar-brand" href="index.html">Conf Bs As</a>
        </div>
        <div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">La conferencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#orador">Los oradores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hon">El lugar y la fecha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#linkArriba">Conviértete en orador</a>
              </li>
              <li class="nav-item">
                <a id="ticket" class="nav-link" href="tickets.html">Comprar tickets</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section id="conviertete-en-orador" class="pt-3 pb-3">
        <div class="container">
          <div class="row">
            <div class="col text-uppercase text-center">
              <h2>Oradores registrados</h2>
            </div>
          </div>
          <div class="row">
            <div class="col pt-2">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($dato = mysqli_fetch_array($datos)){?>
                    <tr>
                      <td><?php echo $dato['id'];?></td>
                      <td><?php echo $dato['nombre'];?></td>
                      <td><?php echo $dato['apellido'];?></td>
                      <td><?php echo $dato['tema'];?></td>
                      <td><a href="editar.php?id=<?php echo $dato['id'];?>">Editar</a></td>
                      <td><a href="eliminar.php?id=<?php echo $dato['id'];?>">Eliminar</a></td>
                    </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
  </main>
  <footer>
    <div class="row">
      <div class="col">Preguntas Frecuentes</div>
      <div class="col">Contáctanos</div>
      <div class="col">Prensa</div>
      <div class="col">Conferencias</div>
      <div class="col">Términos y condiciones</div>
      <div class="col">Privacidad</div>
      <div class="col">Estudiantes</div>
    </div>
  </footer>
</body>
</html>