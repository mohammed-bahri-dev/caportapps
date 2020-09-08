<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Portail d'applications</title>
  <link rel="icon" href="https://www.decision-rh.com/wp-content/uploads/2018/02/Credit-Agricole-Technologies-et-Services.jpg"> 
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="css/small-business.css" rel="stylesheet">
  <style>
    .icon-bar {
      position: fixed;
      top: 20%;
    }
    .icon-bar a {
      display: block;
      text-align: center;
      padding: 6px;
      color: white;
      font-size: 20px;
    }
    .icon-bar a:hover {
        background-color: #edeaea;
    }
    .reseau {
      color: white;
      background-color: white;
      border: 1px solid #edeaea;
    }
    @media (max-width:750px) {
      .icon-bar {
        display:none;
      }
      .caportapps{
        text-align:center;
      }
    }
  </style>
</head>
<body>

<div class="icon-bar">
  <a href="#" class="reseau"><img src="img/teams.png" width="40"></a>
  <a href="#" class="reseau"><img src="img/webex.webp" width="40"></a> 
  <a href="#" class="reseau"><img src="img/skype.png" width="40"></a> 
  <a href="#" class="reseau"><img src="img/trello.png" width="40"></a> 
</div>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#017d8f;">
    <div class="container">
	  <img src="https://private.ca-connect.credit-agricole.fr/resources/images/logo_cats.png">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/caportapps.php">Applications
              <span class="sr-only">(current)</span>
            </a>
          </li>
		      <li class="nav-item active">
            <a class="nav-link" href="/caschool.php">CaSchool</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Contact</a>
          </li>
		      <li class="nav-item active">
            <a class="nav-link" href="/index.php">Déconnection</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <br><br>
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
		    <img class="img-fluid rounded mb-4 mb-lg-0" src="https://i0.wp.com/paris-jetequitte.com/wp-content/uploads/2019/07/cats-montpellier-1200x630.jpg?fit=1200%2C630&ssl=1" alt="">
      </div>
      <div class="col-lg-5">
        <h1 style="font-size: 3em;" class="caportapps">
          <img src="img/fennec.png" width="70">
          <span style="color:#9fd097;" class="font-weight-bold">Ca</span><span style="color:#d0677b;" class="font-weight-bold">Port</span><span style="color:#2a876c;" class="font-weight-bold">apps</span>
		    </h1>
        <p align="justify">
        CaPortapps est une collection d'applications web/mobiles pour le Crédit Agricole. 
        Vous pouvez visiter une application (en ligne), consulter 
        sa documentation ou télécharger son code source.<br>
        Vous avez la possibilité de gérer vos applications une fois créées (modifier ou supprimer).<br>
        FAQ et tutoriels sont disponibles sur la rubrique <a href="caschool.php" style="text-decoration:none;">CaSchool</a>.
        </p>
		    <a class="btn btn-outline-dark" href="#">Ajouter une application &nbsp;<i class="fas fa-plus-circle"></i></a>
      </div>
    </div>
    <div class="input-group mb-3">
		  <div class="dropdown">
			<button class="btn btn-outline-default dropdown-toggle" type="button" style="border-radius: 5px 0 0 5px; border: 1px solid lightgrey; border-right:0px;" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Categorie
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  <a class="dropdown-item" href="#">Toutes les catégories</a>
			  <a class="dropdown-item" href="#">Production</a>
			  <a class="dropdown-item" href="#">Recette</a>
			  <a class="dropdown-item" href="#">Réflexion</a>
			  <a class="dropdown-item" href="#">Maintenance</a>
			  <a class="dropdown-item" href="#">Suspendu</a>
			</div>
		  </div>
		  <input type="text" class="form-control" placeholder="Application">
		  <div class="input-group-append">
			<button class="btn btn-info" type="submit">Rechercher</button>
		  </div>
      	</div>
	<br>

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-success" style="float:right;">Production</span>
			      <h3 class="card-title">Covoiturage</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="https://github.com/mohammed-bahri-dev/carpoolingbyca" class="btn btn-outline-info btn-sm" title="Code source" target="_blank"><i class="fab fa-gitlab"></i></a>
            <a href="/fiche-covoiturage.php" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="/equipe.php" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-warning" style="color:white; float:right;">Recette</span>
			      <h3 class="card-title">CRM</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="/equipe.php" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-danger" style="float:right;">Maintenance</span>
            <h3 class="card-title">Oauth2CASF</h3>
            <p class="card-text" align="justify">AUI9 AUC9 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
	  <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-primary" style="float:right;">Réflexion</span>
            <h3 class="card-title">MuesliProj</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-warning" style="color:white; float:right;">Recette</span>
            <h3 class="card-title">Oauth2Github</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-warning" style="color:white; float:right;">Recette</span>
            <h3 class="card-title">OpenStreetMap</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
	        <!-- /.col-md-4 -->
	  <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-success" style="float:right;">Production</span>
            <h3 class="card-title">Swagger</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-dark" style="float:right">Suspendu</span>
            <h3 class="card-title">NeedIt</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <span class="badge badge-pill badge-dark" style="float:right;">Suspendu</span>
            <h3 class="card-title">eProxy</h3>
            <p class="card-text" align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
          </div>
          <div class="card-footer btn-group" role="group">
            <a href="/covoiturage.php" class="btn btn-outline-info btn-sm" title="Démonstration"><i class="fas fa-video"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Code source"><i class="fab fa-gitlab"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Documentation"><i class="fas fa-file-alt"></i></a>
            <a href="#" class="btn btn-outline-info btn-sm" title="Equipe"><i class="fas fa-users"></i></a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
	
	<div >
	   <ul class="pagination" style="justify-content: center">
		 <li class="page-item" ><a class="page-link" href="#" style="color:#17a2b8;"><i class="fas fa-angle-double-left"></i></a></li>
		 <li class="page-item"><a class="page-link" href="#" style="color:#17a2b8;">1</a></li>
		<li class="page-item"><a class="page-link" href="#" style="color:#17a2b8;">2</a></li>
		<li class="page-item"><a class="page-link" href="#" style="color:#17a2b8;">3</a></li>
		<li class="page-item"><a class="page-link" href="#" style="color:#17a2b8;">4</a></li>		 
		<li class="page-item"><a class="page-link" href="#" style="color:#17a2b8;"><i class="fas fa-angle-double-right"></i></a></li>
	  </ul> 
	</div>

  </div>
  <br>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
