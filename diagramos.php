<!DOCTYPE html>
<html>
<head>
	<title>Forma užpildymui</title>
	<meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/ruta.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="js/scripts.js"></script>
  <script src="js/vytautas.js"></script>
  <script src="js/ruta.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="css/vytautas.css">
  <link rel="stylesheet" type="text/css" href="css/global.css">
  <link rel="stylesheet" type="text/css" href="css/ruta.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script> 

</head>
<body>

<header>
    <!-- Dropdown Structure -->
    <div>
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Europa</a></li>
        <li><a href="#!">Asia</a></li>
        <li class="divider"></li>
        <li><a href="#!">Antarctica</a></li>
        <li><a href="#!">North America</a></li>
        <li><a href="#!">South America</a></li>
      </ul>
      <nav>
        <div class="nav-wrapper blue lighten-1">

          <img class="logo" src="img/aeroplane.png" height="50" width="50">
          <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">News</a></li>
            <li><a href="badges.html">About us</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">Trips</i></a></li>
          </ul>
        </div>
      </nav>

      <nav>
        <div class="nav-wrapper #1565c0 blue darken-3">
          <div class="col s12">
            <a href="#!" class="breadcrumb">First</a>
          </div>
        </div>
      </nav>
    </div>
    
  </header>

<h1>Prisijunkite ir gaukite asmeninius kelionių pasiūlymus tiesiai į elektroninį paštą!</h1>

  <div class="row row-bg">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">Vardas</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Pavardė</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Prisijungiimo duomenys</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Slaptažodis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">El. paštas</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          Kontaktinis El. paštas:
          <div class="input-field inline">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
      </div>
    </form>
  </div>


   <footer class="page-footer blue lighten-2">
            <div class="container text-wide">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text"> 
                  Lokacija ir būstinė: Galvydžio g. 5,
                  Šiaurės Miestelio Technologijų Parkas
                  LT-08236, Vilnius
                  Drungilaite.R@gmail.com
                  +370 606 75071</h5>
                  <p class="grey-text text-lighten-4"></p>
                </div>
                <div class="col l6 s12 right-align">
                  <h5 class="white-text partner-text">Remėjai:</h5>
                  
                  <ul class="remejai">
                    
                    <li >
            <img src="img/facebook.png" height="100" width="100">
          </li>
                    <li >
                      <img src="img/twitter.png" height="100" width="100">
                    </li>
                    <li >
                      <img src="img/instagram.png" height="100" width="100">
                    </li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2017 Copyright Text
              <a class="grey-text text-lighten-4 right" href="#!"></a>
              </div>
            </div>
          </footer>
        
</body>
</html>