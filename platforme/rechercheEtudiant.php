<?php
            require_once 'connexion.php';

      
                $result = $cnx->query("SELECT * FROM etudiant");
                $serche = $_GET['search'];
                $result = $cnx->query("SELECT * FROM etudiant where cin like '%$serche%'");
                foreach ($r = $result->fetchAll() as $row) { ?>
                <h4 style="text-align: center; ">Résultats de recherche ......</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cin</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
                                                        <td><?php echo $row['cin']; ?></td>
                                                        <td><?php echo $row['nom']; ?></td>
                                                        <td><?php echo $row['prenom']; ?></td>
                                                        <td><?php echo $row['date_naiss']; ?></td>
                                                   

                                                        <td><a href="supprimerEtudiant.php?delete=<?php echo $row['cin']; ?>&val=<?= $row['cin']; ?>" class="btn-del"><input type="button" id="ll_btn2" style="background-color: red;" value="Supprimer"></td>
                                                        <td><a href="FormulaireModifierEtudiant.php?edite=<?php echo $row['cin']; ?>"><input type="button" id="ll_btn2" value="Editer"></td>
                                                        <td><a href="details.php?detaile=<?= $row['cin']; ?>"><input type="button" id="ll_btn3" value="Details"></td>
                                                        <td><a href="noteEtudiant.php?detaile=<?= $row['cin']; ?>"><input type="button" id="ll_btn3" value="Liste de Notes"></td>

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