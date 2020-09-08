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
  <div class="container" style="margin-top:80px;">
	<br>
    <div class="input-group mb-3">
		  <input type="text" class="form-control" placeholder="Question" style="border-radius:5px 0 0 5px;">
		  <div class="input-group-append">
			<button class="btn btn-info" type="submit">Rechercher</button>
		  </div>
      	</div>
    <br>
 	<table class="table table-striped table-hover table-sm">
	  <caption>
		<span style="float:left;">
			  <button class="btn btn-info"><i class="fas fa-plus-circle"></i></button>
			  <button class="btn btn-danger"><i class="fas fa-minus-circle"></i></button>
		</span>
		<span style="float:right;">Liste des questions</span>
		</caption>
				<thead>
					<tr align="center">
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Question</th>
						<th>Collaborateur</th>
						<th>Vote</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr align="center">
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
					    <td>Question 1</td>
						<td>Collab 1</td>
						<td>10</td>
						<td>
							<a href="" class="btn btn-outline-info"><i class="fas fa-thumbs-up"></i></a>
							<a href="" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr align="center">
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
					    <td>Question 2</td>
						<td>Collab 2</td>
						<td>5</td>
						<td>
							<a href="" class="btn btn-outline-info"><i class="fas fa-thumbs-up"></i></a>
							<a href="" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
					<tr align="center">
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
					    <td>Question 3</td>
						<td>Collab 3</td>
						<td>0</td>
						<td>
							<a href="" class="btn btn-outline-info"><i class="fas fa-thumbs-up"></i></a>
							<a href="" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
  </div>
  <!-- Footer -->
  <footer class="py-5 bg-dark" style="position: fixed;left: 0;bottom: 0;width: 100%; text-align: center;">
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
