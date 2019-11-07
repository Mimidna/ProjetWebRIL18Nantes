<!doctype html>
<html lang="en">


<!--HEADER-->

<?php
include "include/header.php";
?>



<body >

<!--ENTETE-->




<!--NAVBAR-->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-nico">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="navbar-toggler-icon"></span>
			</button>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="#">Accueil<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Nos modèles</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="#"></a> <a class="dropdown-item" href="#">Mini</a> <a class="dropdown-item" href="#">Berline</a> <a class="dropdown-item" href="#">Sportives</a> <a class="dropdown-item" href="#">SUV</a>
							</div>
						</li>
						<li class="nav-item active">
							 <a class="nav-link" href="#">Configurer</a>
						</li>
					</ul>
					<a class="navbar-brand" href="#">
					<img src="css/logos/logo.png" alt>
				</a>
					<ul class="navbar-nav ml-md-auto">
						<button class="btn btn-primary my-2 my-sm-0 btn-nico" href="contenu/connection.php">
							Se connecter
						</button>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>


<!--CONTENU-->

 <?php
	include "contenu/accueil.php";
	?>




<!--FOOTER-->

  <?php
	include "include/footer.php";
	?>



    <!--SCRIPTS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap-4.3.1.min.js"></script>





</body>

</html>
