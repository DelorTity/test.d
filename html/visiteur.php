
<!doctype HTML>
<HTML>
<head>
<link rel="stylesheet" href="../css/index.css">  
<title> gestion des donne sur les page web du campus</title>
</head>
<body>
   <h1>PAGE DE VISITEUR</h1>
   <form  class="modal-content animate" method="POST" action="">
    <div style="width: 0%; position: center;background-color: chartreuse;">
        <label for="psw"><b>nom du visiteur</b></label>
        <input type="fgcg" placeholder="Enter le nom du visiteur" name="abc" required>
      </div>
  
      <div>
        <button type="submit">Enter</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </div>
    </form>



</body>
</html>
<?php
  include("doc.php");
  $nom=$_POST['abc'];
  $sql =$c->prepare("INSERT INTO visiteurs(nom) VALUES(:nam)");
  $a=$sql->execute([
    'nam'=>$nom,
  ]);
  if($a) {
    echo"succes";
} else {
  echo"echec";
}
?>
