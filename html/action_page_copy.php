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
    echo ("Bienvenu Mr/Mme ".$adminitration[0]['NOM']." bonne journee : ");
    //inserer cet etudiant dans la table liste du jour
        $req=$db->prepare('INSERT INTO liste_du_jour SET nom=?, prenom=?, matricule=?') ;
        $ok= $req->execute([
            $adminitration[0]['NOM'],
            $adminitration[0]['PRENOM'],
            $adminitration[0]['MATRICULE'],
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