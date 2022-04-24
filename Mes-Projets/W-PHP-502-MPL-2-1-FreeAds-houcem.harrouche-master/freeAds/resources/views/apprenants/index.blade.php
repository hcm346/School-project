<!DOCTYPE html>
<html>
	<head>
		<title>apcpedagogie</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<style>
		.fa-heart{color: red; font-size: 25px;}
		.navbar-brand{font-size: 24px; font-weight: bold;}
		.img2:hover{opacity: .6;}
	</style>
	<body>
				<!--Premier navbar=========================================================================-->
		<nav class="navbar navbar-expand-md navbar-light bg-dark">
				<div class="container">
      <button type="button"
					class="navbar-toggler bg-light"
					data-toggle="collapse"
					data-target="#nav">
					<span class="navbar-toggler-icon"></span>
			</button>
        <div class="collapse navbar-collapse justify-content-between" id="nav">
						<ul class="navbar-nav mr-auto">
								<li class="nav-item">
									<a class="nav-link text-light" href="#">
									<span class="fa fa-map-marker">
									</span>&nbsp;Nous sommes ici.</a></li>
								<li class="nav-item"><a class="nav-link text-light " href="#"><span class="fa fa-phone"></span>&nbsp;Télé:216 99 99 99.</a></li>
								<li class="nav-item"><a class="nav-link text-light " href="#"><span class="fa fa-envelope-o"></span>&nbsp;Email: email@apcpedagogie.com .</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
								<li><a class="nav-link text-light" href="#">Cours particuliers en ligne</a></li>
								<li><a class="nav-link text-light" href="#">S'inscrire</a></li>
						</ul>
				 </div>
				</div>
     </nav>
<!--Deuxième navbar=========================================================================-->
		<nav class="navbar navbar-expand-md">
			<div class="container" style="padding: 10px;">
					<div class="navbar-heading">
					<a href="#" class="navbar-brand">
						<span class="fa fa-book" style="color:red">apc</span>pedagogie
					</a>
					</div>
				<ul class="navbar-nav navbar-right">
						<li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Cours et tutoriels</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Nos ressources</a></li>
						<li class="nav-item"><a class="nav-link" href="#">Forums</a></li>
						<li class="nav-item"><a class="nav-link" href="#">à propos de nous</a></li>
				</ul>
			</div>
		</nav>
		<!--carousel slide=========================================================================-->
		<div class="container">
        <div class="row">
            <div class="col">
                <div id="ex-bouton"
                class="carousel slide"
                data-ride="carousel"
                data-interval="5000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src={{ asset('images/img1.jpg') }} alt="First slide">
                          </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src={{ asset('images/img2.jpg') }} alt="Second slide">
												</div>
												<div class="carousel-item">
                            <img class="d-block w-100" src={{ asset('images/img3.jpg') }} alt="Second slide">
												</div>
												<div class="carousel-item">
													<img class="d-block w-100" src={{ asset('images/img4.jpg') }} alt="Second slide">
											</div>
											<div class="carousel-item">
												<img class="d-block w-100" src={{ asset('images/img5.jpg') }} alt="Second slide">
										</div>
											</div>
											<a class="carousel-control-prev" href="#ex-bouton" role="button" data-slide="prev">
													<span class="carousel-control-prev-icon"></span>
													<span class="sr-only">Previous</span>
												</a>
												<a class="carousel-control-next" href="#ex-bouton" role="button" data-slide="next">
													<span class="carousel-control-next-icon"></span>
													<span class="sr-only">Next</span>
												</a>
									</div>
							</div>
					</div>
			</div>
		<!--=========================================================================-->
		<div class="container"  style="padding: 40px;">
			<div class="row">
				<div class="col-md-6">
					<h2>C'est facile Trouvez tout ce que vous cherchez.</h2>
					<p style="text-align: justify;
					padding: 5px; margin: 4px;
					font-size: 16px; box-shadow: 0px 0px 10px black;">Bienvenue sur apcpedagogie!<br>
Apprenez et révisez les examens Microsoft Office Spécialiste et les examens Microsoft Office Expert,à l’aide des vidéos des cours et des exercices interactifs.
Découvrir les astuces Microsoft office Word,Excel,PowerPoint et Access…
<br>Apprenez comment Installer WordPress chez votre hébergeur ou en local en moins de cinq minutes et maîtrisez les fonctions de base de cet incroyable outil de création de site. Choisissez parmi plus de 10000 thèmes gratuits et rédigez vos premiers articles…
Sélectionner les meilleurs tutoriels et cours de formations gratuits pour apprendre la programmation Android.Bienvenue dans mon Cours et tutoriels</br>
Vous trouverez une liste variées des cours en programmation, web ,UML APC…
qui sont élaborées on adoptant une méthode éducative pour une formation agréable et complète,ainsi que des exercices intéressants et des QCM.</p>
				</div>
				<div class="col-md-6">
					<img src={{ asset('images/d5.png')}}
					class="img-fluid img2"
					style="box-shadow: 0px 0px 10px black;"/>
				</div>
			</div>
		</div>
		<!--=========================================================================-->
		<footer style="background: black; color: white;">
			<div class="container text-center">
			<h2 style="color: yellow;">POURQUOI NOUS CHOISIR.</h2>
			<hr>
			<div class="row">
				<div class="col-md-4">
					<h4>Les cours de programmation.</h4>
					<hr>
					<p style="text-align: justify; padding: 3px; margin: 3px; font-size: 16px; box-shadow: 3px 3px 3px white;">
						L’informatique est le domaine d’activité scientifique, technique et industriel concernant le traitement automatique de l’information par des machines telles que : calculateur, système embarqué, ordinateur, console de jeux vidéo, robot, automate, etc. [Wikipedia].
					<br>Ce cours va vous initier aux bases du Visual Net, aucun prérequis n’est demandé : il n’est pas nécessaire de connaître le moindre langage, tout vous sera expliqué.
					Ce cour est destiné sans limite d’âge à tout internautes qui veut se former ou mettre à jour ses connaissances en informatique.</p>

					</div>

				<div class="col-md-4">
					<h4>Le management de projet.</h4>
					<hr>
					<p style="text-align: justify; padding: 3px; margin: 3px; font-size: 16px; box-shadow: 3px 3px 3px white;">
						Le management de projet s’est révélée être la méthode la plus efficace pour fournir des produits dans le coût, le calendrier et les contraintes de ressources.
					<br>Cette série intensive et pratique de cours vous donne les compétences nécessaires pour que vos projets soient réalisés dans les délais et le budget tout en donnant à l’utilisateur le produit qu’ils attendent. Vous obtiendrez une solide connaissance pratique des bases de la gestion de projet et pourrez utiliser immédiatement ces connaissances pour gérer efficacement les projets de travail.</p>
				</div>

				<div class="col-md-4">
					<h4>L’Approche Par Compétences.</h4>
					<hr>
					<p style="text-align: justify; padding: 3px; margin: 3px; font-size: 16px; box-shadow: 3px 3px 3px white;">
						Axer l’apprentissage sur des mises en situation techniques et/ou professionnelles qui devront permettre à l’apprenant d’aborder un (ou des) métiers dans ses dimensions opérationnelles.
					<br>L'appproche par compétences : Il s’agit de conjuguer « savoir », « savoir-être » et « savoir-faire » de l’apprenant.
						<br>Le formateur s’engage dans une classification des objectifs à atteindre, en allant du plus simple au plus complexe.
				<br>L’évaluation des apprentissages porte sur les comportements observables, elle peut être de type formatif, sommatif ou critérié.</p>
				</div>
			</div>

		<!-- footer -->
				<div class="container" style="padding: 40px;">
					<div class="row">
							<div class="col text-center">
									<div class="py-2">
											<a href="#"><i class="fa fa-facebook fa-2x text-primary mx-3"></i></a>
											<a href="#"><i class="fa fa-google-plus fa-2x text-danger mx-3"></i></a>
											<a href="#"><i class="fa fa-twitter fa-2x text-info mx-3"></i></a>
											<a href="#"><i class="fa fa-youtube fa-2x text-danger mx-3"></i></a>
									</div>
									<p class="text-primary py-4 m-0">&copy;Copyright 2016 -apcpedagogie</p>
							</div>
					</div>
			</div>
		</div>
	</footer>
	 <!-- end of footer -->
		<!--=========================================================================-->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>