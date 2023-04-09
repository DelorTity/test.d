<?php
if ($_POST['uname']) {
    # code...
    $uname = $_POST['uname'];
    $user = 'root';
    $pass = '';

try
{
    /*
    //recuperer l'etudiant en question
    $db = new PDO ('mysql:host=localhost;dbname=istec',$user,$pass);
    $req=$db->prepare('SELECT * FROM etudiants WHERE id=:un') ;
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute([
        ':un'=>$uname
    ]);
    $etudiant= $req->fetchAll();
    echo $etudiant[0]['NIVEAU'];
    */
    //inserer ce visiteur dans la table visiteurs
        // Créer une instance de l'objet PDO
        $db = new PDO("mysql:host=localhost;dbname=istec", "root", "");
        $req=$db->prepare('INSERT INTO visiteurs SET id=?, nom=?,') ;
        $ok= $req->execute([
            $etudiant[0]['ID'],
            $etudiant[0]['NOM'],
           
        ]);
        
    if($ok==1){
        header('Location: visiteur.php');
    }else{
        echo("Erreur d'enregistrement");
    }
   
 
}
catch (PDOException $e)
{
  print "erreur :"  . $e->getMessage() . "<br/>";
  die;
}
}