<?php
if ($_POST['uname']) {
    # code...
    $uname = $_POST['uname'];
    $user = 'root';
    $pass = '';

try
{
    //recuperer l'etudiant en question
    $db = new PDO ('mysql:host=localhost;dbname=istecdatabase',$user,$pass);
    $req=$db->prepare('SELECT * FROM adminitration WHERE ID=:un') ;
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute([
        ':un'=>$uname
    ]);
    $adminitration= $req->fetchAll();
    echo ("Bienvenu Mr/Mme ".$uname." bonne journee : ".$adminitration[0]['NOM']);
    //inserer cet etudiant dans la table liste du jour
        $req=$db->prepare('INSERT INTO liste_du_jour SET nom=?, prenom=?, matricule=?') ;
        $ok= $req->execute([
            $etudiant[0]['NOM'],
            $etudiant[0]['PRENOM'],
            $etudiant[0]['matricule'],
        ]);
        
    if($ok){
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