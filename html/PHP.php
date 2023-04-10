<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <title>Document</title>
</head>

<body>
    <a href="visiteur.php" id="el">PAGE visiteur</a>
    <?php
$user = 'root';
$pass = '';

try
{
$db = new PDO ('mysql:host=localhost;dbname=istecdatabase',$user,$pass);
$req=$db->prepare('SELECT * FROM etudiants') ;
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute();
$etudiants= $req->fetchAll();
  // print_r($etudiants);
  //   echo ( $etudiants[0]['ID']);
   
 
}
catch (PDOException $e)
{
  print "erreur :"  . $e->getMessage() . "<br/>";
  die;
}
?>
    <!-- Button to open the modal login form 
<button onclick="document.getElementById('id01').style.display='block'">Login</button>
-->
    <!-- The Modal -->
    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close"
            title="Close Modal">&times;</span>

        <!-- Modal Content -->
        <form class="modal-content animate" method="POST" action="action_page.php">
            <div class="imgcontainer">
                <img src="image/istec.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
                <label for="uname"><b>id de l'etudiant</b></label>
                <select name="uname" id="uname" style="width:40%">
                    <?php 
        for ($i=0; $i<count($etudiants); $i++) {
         echo "<option value=".$etudiants[$i]['ID'].">".$etudiants[$i]['NOM']."</option>";
        }
        ?>
                </select>
                <!-- <input type="datetime-local" name="heure"> -->
            </div>
            <div>
                <input type="submit" name="send">Enter</input>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

        </form>

    </div>
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>