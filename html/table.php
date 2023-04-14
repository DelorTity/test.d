<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>visiteurs</title>
</head>

<body>
    <nav>
        <a href="visiteur.php">Ajouter le visiteur</a>
    </nav>
    <div>
        <h2>Liste des tâches</h2>
        <table>
            <tr>
                <td>nom du visiteurs</td>
                <td>heure_date</td>
                <td>Actions</td>
            </tr>
            <?php

            // Se connecter à la BDD
            include("doc.php");

            // Ecrire la requête
            $sql = "SELECT * FROM tache";

            // Executer
            $exec = $c->query($sql);

            // Recuperer l'ensemble de mes tâches
            $taches = $exec->fetchAll();

            // Afficher mes tâches
            foreach ($taches as $tache) {
                echo '<tr>';
                echo '<td>' . $tache["nom"] . '</td>';
                echo '<td>' . $tache["description"] . '</td>';
                echo '<td>
                <a href="#">Modifier</a>
                <a href="#">Supprimer</a>
                </td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>

</html>