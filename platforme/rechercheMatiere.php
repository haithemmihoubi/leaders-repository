<?php
            require_once 'connexion.php';

      
                $result = $cnx->query("SELECT * FROM matiere");
                $serche = $_GET['search'];
                $result = $cnx->query("SELECT * FROM matiere where nom_matiere like '%$serche%'");
                foreach ($r = $result->fetchAll() as $row) { ?>
                <h4 style="text-align: center; ">Résultats de recherche ......</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom Matiere</th>
      <th scope="col">Coef</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
                                                         <td><?php echo $row['id_matiere']; ?></td>
                                                        <td><?php echo $row['nom_matiere']; ?></td>
                                                        <td><?php echo $row['coef']; ?></td>
                                                  

                                                        <td><a href="supprimerMatiere.php?delete=<?php echo $row['id_matiere']; ?>" class="btn-del"><input type="button" id="ll_btn" value="Supprimer"></td>
                                                        <td><a href="FormulaireModifierMatiere.php?edite=<?php echo $row['id_matiere']; ?>"><input type="button" id="ll_btn2" value="Editer"></td>



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