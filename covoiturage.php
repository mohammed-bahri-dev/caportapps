<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Portail d'applications</title>
  <link rel="icon" href="https://www.decision-rh.com/wp-content/uploads/2018/02/Credit-Agricole-Technologies-et-Services.jpg"> 
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">
  <style>
	.demo-iframe-desktop {
	  width: 95%;
	  height: 550px; 
	  border: 1px solid #017d8f; 
	  overflow-y: hidden;
	}
	.demo-iframe-mobile {
	  width: 350px;
	  height: 550px; 
	  border: 1px solid #017d8f; 
	  overflow-y: hidden;
	}
  </style>

</head>

<body>

  <!-- Navigation -->
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
<div align="center" style="margin-top:55px;">
  <br>
  <button id="btn-demo-1" class="btn btn-outline-dark btn-demo">Mobile <i class="fas fa-mobile-alt"></i></button>
  <button id="btn-demo-2" class="btn btn-dark btn-demo">Desktop <i class="fas fa-desktop"></i></button>
  <br><br>
  <iframe src="https://ca-covoit-bhr.fr/" class="demo-iframe-desktop" scrolling="no"></iframe> 

  </div>
<br><br>
  <!-- Footer -->
  <footer class="py-5 bg-dark" style="left: 0;bottom: 0;width: 100%; text-align: center;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  
    <script>
	$(document).ready(function(){
	  $("#btn-demo-1").click(function(){
		$("iframe").removeClass("demo-iframe-desktop");
		$("iframe").addClass("demo-iframe-mobile");
		$("#btn-demo-1").removeClass("btn btn-outline-dark");
		$("#btn-demo-1").addClass("btn btn-dark");
		$("#btn-demo-2").removeClass("btn btn-dark");
		$("#btn-demo-2").addClass("btn btn-outline-dark");
	  });
	  $("#btn-demo-2").click(function(){
		$("iframe").removeClass("demo-iframe-mobile");
		$("iframe").addClass("demo-iframe-desktop");
		$("#btn-demo-2").removeClass("btn btn-outline-dark");
		$("#btn-demo-2").addClass("btn btn-dark");
		$("#btn-demo-1").removeClass("btn btn-dark");
		$("#btn-demo-1").addClass("btn btn-outline-dark");
	  });
	});
  </script>


</body>

</html>
