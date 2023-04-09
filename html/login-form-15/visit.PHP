<?php
include('../doc.php');

  if(isset($_POST['send'])){
    $nom=$_POST['nom'];
    $sql =$c->prepare("INSERT INTO visiteurs(nom) VALUES(:nam)");
    $a=$sql->execute([
      'nam'=>$nom,
    ]);
    if($a) {
        echo("<script>alert('Bienvenue a Mr/Mme $nom')</script>");

  } else {
    echo"echec";
  }
  }
 
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ESPACE DU VISITEUR</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Entrer votre nom</h3>
			      		</div>
				
			      	</div>
							<form  method="POST" >
			     
		            <div class="form-group mt-3">
                    <div class="form-group mt-3">
			      			<input type="text" name="nom" class="form-control" required>
			      			<label class="form-control-placeholder" for="username">Nom </label>
			      		</div>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="send" class="form-control btn btn-primary rounded submit px-3">Envoyer</button>
		            </div>
		          
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

