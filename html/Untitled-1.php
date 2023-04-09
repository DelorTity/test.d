
<!doctype html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>istec authentification field</title> 
      <link rel="stylesheet" href="../css/index.css"> 
      
   </head>
<body>

<?php
    $user = 'root';
     $pass = '';

      try{
       $db = new PDO ('mysql:host=localhost;dbname=delor',$user,$pass);
       foreach ($db->query('SELECT * FROM istec')as $db){
            print_r($db);
        }
    }catch(PDOException $e){
        $e->getMessage();
    }
?>

    <h2><output>L'INSTITUT SUPERIEUR DES TECHNIQUE ECONOMIQUE ET COMPTABLE</output> </h2>


    <h1><output>BIENVENU A ISTEC </output></h1>

<div id="del">

    <select  content = "store" >
        <option>GL</option><OPTION>CH</OPTION>
         <option>GLT</option><option>BAT</option>
         <option>ET</option><option>TOPO</option>
         <option>MCV</option><option>CGE</option><option>AM</option>
         <option>BF</option><option>SI ET SF</option>
         <p><input type="text" name ="visiteur" placeholder ="entrer le matricule de l'etudiant"><br>
             <input type="number" name ="niveau=7" placeholder = "entre le niveau">

         </p>
    </select>

   </div>

    <div id = visitors>
        <p><input type="text" name ="visiteur" placeholder ="entrer le nom du visiteur"><br>
               <input type="datetime-local" name="heure">

        </p>
    </div>

          <P><center><button id="main"> ENTRER </button></center></p>



</body>
</html>