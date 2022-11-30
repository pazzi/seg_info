<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segurança da Informação 6. semestre</title>

    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> 

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>
    <header><!--Incio Cabeçalho-->
        <nav class="navbar navbar-expand-md">
          <div class="container">

            <div id="titulo">
                <h5 id="titulo-H5">Login</h5>
            </div>

            <button class="navbar-toggler" data-toggle="collapse"
            data-target="#nav-principal">
              <i class="fas fa-bars text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="nav-principal">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="cadastrar.php" class="nav-link">Cadastrar</a>
                </li>
                <li class="nav-item">
                  <a href="cad_cartao.php" class="nav-link">Cadastrar Cartões</a>
                </li>
                <li class="nav-item">
                  <a href="logout.php" class="nav-link">Logout</a>
                </li>
                <li class="nav-item">
                  <a href="sensiveis.php" class="nav-link">Consulta dos dados</a>
                </li>
              </ul>
            </div>
  
          </div>
        </nav>
    </header><!--Fim Cabeçalho-->

    <section class="d-flex" id="coluna-mapa" >
      <div class="coluna">
{block name=main}{/block}
</body>
</html>
