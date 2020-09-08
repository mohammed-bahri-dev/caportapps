<!DOCTYPE html>
<html lang="fr">

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
      .icon-bar, .sommaire {
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
  <div class="container" style="margin-top:100px;">
  <div class="row">
    <div class="col-lg-9">
    <div>
      <p align="justify">Dans ce tutoriel, je vous propose de découvrir une partie du fonctionnement du protocole Oauth 2.0 à travers la mise en place d'un système de connexion, exploitant l'API AUC9.
        Pour ce faire, nous allons créer une petite application demo en PHP.
      </p>
      <h2><span class="font-weight-bold">L'objectif du protocole l'OAuth 2.0</span></h2>
      <p align="justify">
        Le protocole Oauth est un protocole d'autorisation qui permet aux utilisateur de donner à un site l'accès aux données hébergées sur un autre site. 
        Ce mécanisme est utilisé par des sociétés comme Google, Github, LinkedIn et autre afin de permettre aux utilisateurs de partager leurs 
        informations avec des applications tierces. 
      </p>
      <img src="/img/diagramme2.jpg" width="100%">
      <br><br>
      <h2 class="font-weight-bold">Etape 1 : Création d'une application</h2>

      <p>La deuxième étape consiste à créer une application : </p>

      <img src="app1.PNG" width="100%">
      <br><br>
      <img src="app2.PNG" width="100%" style="border: 1px solid #e3f2f4;">


      <h2 class="font-weight-bold">Etape 2 : Obtention de l'autorisation</h2>

    <p align="justify">La deuxième étape consiste à demander à l'utilisateur les permissions d'accès nécessaires afin de pouvoir accéder aux données / actions qui nous intérèssent. <br>
    Pour cela on dirige l'utilisateur vers l'<strong>url d'autorisation</strong> accompagnée de paramètres spécifiques.</p>

    <pre style="background-color:#2d2d2d;border-radius:10px;color:white;">
      <code>
      &lt;URL_AUTORISATION&gt;?
      scope=email&amp;
      redirect_uri=&lt;URL_REDIRECTION&gt;&amp;
      response_type=code&amp;
      client_id=&lt;CLIENT_ID&gt;</code>
    </pre>

    <ul>
    <li>L'<code>URL</code> d'autorisation peut être obtenu en consultant la documentation de l'API visée.</li>
    <li>Le <code>CLIENT_ID</code> s'obtient en créant une application auprès du service concerné. La création de l'application permet aussi de personnaliser l'apparence de l'écran d'autorisation qui sera présenté à l'utilisateur.</li>
    <li>Le <code>scope</code> va dépendre des services et permet de définir les informations que l'on souhaite obtenir ou les actions que l'on souhaite auprès de l'utilisateur.</li>
    <li>Le <code>redirect_uri</code> permet de définir l'URL vers laquelle l'utilisateur sera redirigé lorsqu'il aura accepté les permissions. C'est cette URL qui sera responsable du traitement des informations liées à l'autorisation.</li>
    <li>Le <code>response_type</code> permet de définir ce qu'on souhaite obtenir en callback.</li>
    </ul>

    <p>Exemple</p>
    <pre style="background-color:#2d2d2d;border-radius:10px;color:white;">
      <code>
      <span style="color:#8ecc92;">https://private.ca-connect.credit-agricole.fr/authorize</span>?
      scope=<span style="color:#8ecc92;">openid profile functionnal_posts</span>&amp;
      redirect_uri=<span style="color:#8ecc92;">http://localhost:8000/callback.php</span>&amp;
      response_type=<span style="color:#8ecc92;">code</span>&
      client_id=<span style="color:#8ecc92;">e7d9cd13fa9330b5ab80749188fb5716669de29e970da19733e2ce198feb2ade</code>
    </pre>

    <h2 class="font-weight-bold">Etape 3 : L'utilisateur accepte les permissions</h2>

    <p align="justify">Si l'utilisateur accepte les permissions, il est automatiquement redirigé vers le chemin défini en paramètre avec un code d'autorisation. <br>
    Ce code d'autorisation n'est valable que pour une courte durée et permet d'obtenir un token d'accès auprès du service concerné. </p>

    <pre style="background-color:#2d2d2d;border-radius:10px;color:white;">
    <code>
      curl --request POST \
      --url &lt;TOKEN_ENDPOINT&gt; \
      --header <span class="hljs-string">'content-type: application/x-www-form-urlencoded'</span> \
      --data client_id=&lt;CLIENT_ID&gt; \
      --data client_secret=&lt;CLIENT_SECRET&gt; \
      --data code=&lt;CODE&gt;\
      --data redirect_uri=&lt;REDIRECT_URI&gt; \
      --data grant_type=authorization_code
    </code></pre>

    <p>En échange de cette requête on obtiendra le code d'accès qui nous permettra ensuite d'accéder aux différentes API du service tiers.</p>

    <pre style="background-color:#2d2d2d;border-radius:10px;color:white;">
    <code>
    {
      <span class="hljs-attr">"access_token"</span>: "<span style="color:#8ecc92;">yaz/eaze.azrjpazroijznfazkvhjzabvkjzbfk</span>",
      <span class="hljs-attr">"expires_in"</span>: <span style="color:#8ecc92;">3600</span>,
      "<span>token_type</span>": "<span style="color:#8ecc92;">Bearer</span>",
    }
    </span></code></pre>

    <h2 class="font-weight-bold">Etape 4 : On utilise le token d'accès</h2>

    <p>Maintenant que l'on a le token d'accès il est possible de le joindre dans l'en-tête <code>Authorization</code> de nos requêtes afin de pouvoir accéder à certains points d'entrées de l'API. <br>
    Par exemple pour récupérer les informations personnelles de l'utilisateurs : </p>

    <pre style="background-color:#2d2d2d;border-radius:10px;color:white;">
    <code>
      curl --request GET \
      --url &lt;userinfo_endpoint&gt; \
      --header <span class="hljs-string">'authorization: Bearer &lt;ACCESS_TOKEN&gt;'</span>
    </code></pre>

    <p>Cela vous permet d'obtenir un nouveau token d'accès sans avoir a demander à nouveau l'autorisation de l'utilisateur. </p>

    <h2 class="font-weight-bold">Liens utiles</h2>

    <ul>
    <li><a href="https://developers.google.com/identity/protocols/OAuth2WebServer">Acculturation CR - portail v2</a></li>
    <li><a href="https://github.com/thephpleague/oauth2-client">Librairie OAuth 2.0 générique pour PHP</a></li>
    </ul>

          </div>
    
  
          </div>
    <div class="col-lg-3">
      <div style="position: fixed" class="sommaire">
      <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Rechercher">
              <div class="input-group-append">
                <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>
          <br>
         <ul class="list-group">
            <li class="list-group-item" style="background-color:#017d8f; color:white;text-align:center;">
              <h5>Plan du tutoriel</h5>
            </li>
            <li class="list-group-item">L'objectif du protocole l'OAuth 2.0</li>
            <li class="list-group-item">Etape 1 : Création d'une application</li>
            <li class="list-group-item">Etape 2 : Obtention de l'autorisation</li>
            <li class="list-group-item">Etape 3 : Accepter les permissions</li>
            <li class="list-group-item">Etape 4 : On utilise le token d'accès</li>
            <li class="list-group-item">Cas pratique : Demo PHP</li>
            <li class="list-group-item">Conclusion</li>
         </ul>

  </div>
        </div>
    </div>
  </div>
        </div>
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


</body>

</html>

