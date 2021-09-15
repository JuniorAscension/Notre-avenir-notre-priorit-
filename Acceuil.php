<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img class="logo" src="Logo.png" alt="Logo du site"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil <span class="sr-only"></span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Nos formations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Pâtisserie</a>
          <a class="dropdown-item" href="#">Cosmétique</a>
          <a class="dropdown-item" href="#">Agro-alimentaire</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">A propos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Conctatez-nous</a>
      </li>
    </ul>
  </div>
  <nav class="navbar navbar-light bg-light">
  <form id="search" class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button id="bouton" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
</nav>
<div class="container-fluid">
  <section class="hero-section">
      <h1>Bienvenue sur notre site.</h1>
      <h2>Notre Avenir Notre Priorité</h2>
  </section>
</div>
<div class="container">
  <div class="row">
    <div class="col-lg-6 para1">
      <p class="titre"><h3><u>Que devrons-nous savoir ?</u></h3></p>
      <p>Beaucoup de besoins sont communs à tous les hommes: manger, s’abriter et s’habiller, par exemple.On peut facilement s’imaginer des millions de femmesdans toutes les parties du monde en train de peler des
      patates pour nourrir leur famille; des ouvriers en trainde construire des maisons et des métiers tissant des millions de verges de tissus pour nos vêtements.Mais il existe aussi des milliers de besoins personnels dont la poursuite distrait notre ennui. <br>
      C'est notamment là qu'intervient le Projet Notre Avenir Notre Priorité afin de faire des jeunes leaders d'aujourd'hui, de véritables hommes capables d'auto entreprendre.Ce projet offre la possibilité de recevoir des formations en <em>Pâtisserie</em>,
      en <em>Cosmétique</em> et en <em>Agro-Alimentaire</em>.Découvrer ces formations et lancer vous à entreprendre afin d'assurer votre avenir.
      </p>
    </div>
    <div class="col-lg-5">
      <img class="img_Argent" src="Argent.jpeg" alt="image">
    </div>
  </div>
</div>
<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Pâtisserie.png" id="Pâtisserie" class="d-block w-100" alt="un">
    </div>
    <div class="carousel-item">
      <img src="Cosmétique.png" id="Cosmétique" class="d-block w-100" alt="deux">
    </div>
    <div class="carousel-item">
      <img src="Agroalimentaire.png" id="Agroalimentaire" class="d-block w-100" alt="trois">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-4">
      <h3><a href="#">Pâtisserie</a></h3>
      <img src="Gâteau.jpg" id="Gâteau" alt="photo">
      <p class="Gâteau">
      Les mets relevant de la pâtisserie sont sucrés et la plupart du temps nécessitent une cuisson.Comme pour la cuisine salée, il existe de grandes bases. Il existe cinq grands types de pâtes, et les divers gâteaux se rattachent la plupart du temps à l'un d'eux. Pour que la pâtisserie soit réussie, il faut respecter les principes liés à la préparation de ces différentes pâtes. 
      Dans cette rubrique apprenez à faire des <b>gâteaux cake</b>, des <b>gâteaux madeleine</b> et des <b>biscuits</b>.
      </p>
    </div>
    <div class="col-4">
      <h3><a href="#">Cosmétique</a></h3>
      <img src="Teint.jpg" id="Teint" alt="photo">
      <p class="Teint">
      Les cosmétiques sont des produits d'hygiène et d'embellissement qui restent superficiels dans leurs actions. On a vu se développer récemment des produits cosmétiques « Bio » ou « Naturel ». Les caractéristiques permettant l'utilisation de ces qualificatifs ont fait l'objet de longues discussions. L'appellation « Bio » est réservée à des produits cosmétiques dont les ingrédients sont issus de l'agriculture biologique. Elle fait l'objet de certifications délivrées par diverses organisations privées (ECOCERT en France, SOIL Association, BDIH, AB, etc. ailleurs), utilisant chacune leur référentiel d'évaluation du produit et de ses ingrédients.
      Découvrez au cours d'une formation meilleure, à faire du <b>savon de bain</b>, du <b>du savon liquide</b>, du <b>savon en poudre</b>, du <b>parfum</b>, <b>lait et pommade du corp</b>...
      </p>
  </div>
  <div class="col-4">
    <h3><a href="#">Agroalimentaire</a></h3>
    <img src="Huile.jpg" id="Huile" alt="photo">
    <p class="Huile">
    Se dit des produits agricoles conditionnés ou transformés par l'industrie. C'est un secteur d'activité allant de la production agricole aux denrées alimentaires élaborées à partir de ressources naturelles et des techniques industrielles. Ce domaine englobe les phases de transformation, conservation et de commercialisation des produits se situant entre le stade agricole et celui de la consommation. N'hésitez pas à vous lancer dans un vaste domaine en apprenant à préparer de la <b>mayonnaise</b>, du <b>vinaigre</b>, des <b>sirops</b>, des <b>jus de tout genre de fruit</b> et pleines d'autres préparations à découvrir dans la rubrique Agroalimentaire de nos formation.
    </p>
  </div>
</div>
<div class="container-fluid">

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>