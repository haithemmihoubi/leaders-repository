<?php
            require_once 'connexion.php';

      
                $result = $cnx->query("SELECT * FROM classe");
                $serche = $_GET['search'];
                $result = $cnx->query("SELECT * FROM classe where nom_classe like '%$serche%'");
                foreach ($r = $result->fetchAll() as $row) { ?>
                <h4 style="text-align: center; ">Résultats de recherche ......</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom Classe</th>
     <th scope="col">Action</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
                                                        <td><?php echo $row['id_classe']; ?></td>
                                                        <td><?php echo $row['nom_classe']; ?></td>
                                                  

                                                        <td><a href="supprimerCour.php?delete=<?php echo $row['id_classe']; ?>" class="btn-del"><input type="button" id="ll_btn" value="Supprimer"></td>
                                                        <td><a href="FormulaireModifierCour.php?edite=<?php echo $row['id_classe']; ?>"><input type="button" id="ll_btn2" value="Editer"></td>
                                                  
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