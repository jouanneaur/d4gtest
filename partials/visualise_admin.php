<form action="index.php" method="post"> 
    <select>
        <?php
        $query = "SELECT nom FROM locat";
        $results = mysqli_query($db, $query);

        while ($row = mysqli_fetch_array($results))
        {
        ?>
        <?php
        }
        ?>
                <p>
                <strong>Offres</strong> :</br>
                <?php echo $donnees['identifiant']; ?><br/>
                Type : <?php echo $donnees['nom_tache']; ?></br>
                Description : <?php echo $donnees['Description']; ?>
                </n>
                </n>
                </p>
            <?php
            }
            $reponse->closeCursor(); // Termine le traitement de la requête
        ?>
    </select>
</form>