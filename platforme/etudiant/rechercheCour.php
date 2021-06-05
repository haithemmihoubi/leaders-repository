<?php
            require_once 'connexion.php';

      
                $result = $cnx->query("SELECT * FROM cour");
                $serche = $_GET['search'];
                $result = $cnx->query("SELECT * FROM cour where nomCour like '%$serche%'");
                foreach ($r = $result->fetchAll() as $row) { ?>
                <h4 style="text-align: center; ">Résultats de recherche ......</h4>
<table class="table">
  <thead>
    <tr>
    <th>ID</th>
                                                    <th>Nom Matiere</th>
                                                    <th>Rédigé Par</th>


                                                       <th>Nom Cour / Atelier</th>
                                                       <th>Lien</th>
    </tr>
  </thead>
  <tbody>
  <tr>
  <td><?php echo $row['id_cour']; ?></td>
                                                    <td><?php echo $row['nom_matiere']; ?></td>                     
                                                    <td><?php echo $row['nom_enseignant']; ?></td>                                                     
                                

                                                        <td><?php echo $row['nomCour']; ?></td>   
                                                        <td><a href="../Cour/lienCour/<?php echo $row['lienCour'];?>"><button type="button" class="btn btn-primary">Telecharger</button></a></td>
 
                                                    </tr>
  </tbody>
</table>
<br>
<br>
<br>

<hr>
<hr>


<?php }
              ?>