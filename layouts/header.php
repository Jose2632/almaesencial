<?php 

 session_start();
 $csrfToken = bin2hex(random_bytes(32));
 $_SESSION['csrf_token'] = $csrfToken;
 
?>
<!doctype html>
<html lang="es" data-bs-theme="auto">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="HootStack">
  <meta name="generator" content="HootStack">
  <title>Bienvenido</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="src/css/bootstrap.min.css" rel="stylesheet">
  <link href="src/css/app.css" rel="stylesheet">
  <link href="src/aos/dist/aos.css" rel="stylesheet">
  <link href="src/css/carousel.css" rel="stylesheet">
</head>


<body class="bg-body text-light"> 

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-body">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> <b> Alma Elevada </b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
       <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/about">Acerca de Mí</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/testimonial">Testimonios</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<form method="POST" action="bin/app.php">
  <!-- Otros campos del formulario -->
  <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>">
  <button class="whatsapp pulse" type="submit">  <i class="fab fa-whatsapp"></i> </button>
</form>