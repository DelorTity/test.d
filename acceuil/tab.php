<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="t.css">


</head>
<body>
<div class="container" style="width: 80%;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="margin-left:350px;">
                    <h2 class="center">LISTE JOURNALIER DES ETUDIANTS </h2>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id etudiant</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Filiere</th>
                                <th scope="col">Niveau</th>
                                <th scope="col">Date_Heure</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <?php 
                                	include('config.php');

                                    $select= $pdo->prepare("SELECT * FROM liste_du_jour");
                                    $select->execute();
                                    $special= $select->fetchAll();
                            ?>
                                
                            
                            <?php foreach($special as $row):?>
                               
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['nom']?></td>
                                    <td><?php echo $row['prenom']?></td>
                                    <td><?php echo $row['filiere']?></td>
                                    <td><?php echo $row['niveau']?></td>
                                    <td><?php echo $row['date_heure']?></td>
                                   
                                </tr>
                            <?php endforeach?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="width: 80%;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div style="margin-left:350px;">
                    <h2 class="center">LISTE DES VISITEURS </h2>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Id visiteur</th>
                                <th scope="col">Nom</th>
                             
                                <th scope="col">Date_Heure</th>
                            </tr>
                        </thead>
                        <tbody class="customtable">
                            <?php 
                                	include('config.php');

                                    $select= $pdo->prepare("SELECT * FROM visiteurs");
                                    $select->execute();
                                    $res= $select->fetchAll();
                            ?>
                                
                            
                            <?php foreach($res as $row):?>
                               
                                <tr>
                                    <td><?php echo $row['id']?></td>
                                    <td><?php echo $row['nom']?></td>
                                    
                                    <td><?php echo $row['date_heure']?></td>
                                   
                                </tr>
                            <?php endforeach?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>