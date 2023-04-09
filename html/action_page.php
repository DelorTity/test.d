<?php
if ($_POST['uname']) {
    # code...
    $uname = $_POST['uname'];
    $user = 'root';
    $pass = '';

try
{
    //recuperer l'etudiant en question
    $db = new PDO ('mysql:host=localhost;dbname=istec',$user,$pass);
    $req=$db->prepare('SELECT * FROM etudiants WHERE id=:un') ;
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute([
        ':un'=>$uname
    ]);
    $etudiant= $req->fetchAll();
    echo $etudiant[0]['NIVEAU'];
    //inserer cet etudiant dans la table liste du jour
        $req=$db->prepare('INSERT INTO liste_du_jour SET id=?, nom=?, prenom=?, filiere=?, niveau=?') ;
        $ok= $req->execute([
            $etudiant[0]['ID'],
            $etudiant[0]['NOM'],
            $etudiant[0]['PRENOM'],
            $etudiant[0]['FILIERE'],
            $etudiant[0]['NIVEAU'],
        ]);
        
    if($ok==1){
        echo("<script>alert('Insertion reussie')</script>");
    }else{
        echo'echec';
    }
   
 
}
catch (PDOException $e)
{
  print "erreur :"  . $e->getMessage() . "<br/>";
  die;
}
}