<?php

include('../doc.php');

try
{
$req=$c->prepare('SELECT * FROM adminitration') ;
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute();
$adminitration= $req->fetchAll();
  // print_r($adminitration);
  //   echo ( $adminitration[0]['ID']);
   
 
}
catch (PDOException $e)
{
  print "erreur :"  . $e->getMessage() . "<br/>";
  die;
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>authentification de l'Administration</title>
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
					<h2 class="heading-section">ATHENTIFICATION DE L'Administration</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Information Administration</h3>
			      		</div>
				
			      	</div>
							<form action="../action_page.php" method="POST" >
			     
		            <div class="form-group mt-3">

						<select class="form-control" name="uname" id="uname" >
							<?php 
							for ($i=0; $i<count($adminitration); $i++) {
							echo "<option value=".$adminitration[$i]['ID'].">".$adminitration[$i]['NOM']."</option>";
							}
							?>
						</select>
		            </div>
		            <div class="form-group">
		            	<button type="submit" name="send" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>

		          </form>
		          <p class="text-center"><a  href="index.php">retour a la page d'accueill?</a></p>
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

