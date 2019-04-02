<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Style et Scripts Bootstrap -->
    <?php wp_head() ?>
    <!-- Style et Scripts Bootstrap -->
    
    <title>Hemmel</title>
</head>

<body>

<header class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3">
  <div class="container">
  <a class="navbar-brand d-none d-lg-flex" href="#">Hemmel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon mb-1"></span> <span class="text-light">Hemmel</span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Réservations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galerie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
    <button class="btn btn-outline-light my-2 my-sm-0 ml-lg-3" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-search"></i></button>
  </div>
</div>
</nav>
</header>

<!-- Modal Search -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 ml-auto w-75" type="search" placeholder="Rechercher" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0 mr-auto" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>

</html> 