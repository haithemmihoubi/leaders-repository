

<?php
            require_once 'connexion.php';
       
      
                $result = $cnx->query("SELECT * FROM note");
                $serche = $_GET['search'];
                $result = $cnx->query("SELECT * FROM note where cin_etudiant='$serche'");
                foreach ($r = $result->fetchAll() as $row) { ?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cin Etudiant</th>
      <th scope="col">Nom Matiere</th>
      <th scope="col">Note devoire de controle</th>
      <th scope="col">Note devoire de Synthèse</th>
      <th scope="col">Note NP</th>
      
      <th scope="col">Moyenne</th>
      
      <th scope="col">Action</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <tr>
                                                        <td><?php echo $row['cin_etudiant']; ?></td>
                                                        <td><?php echo $row['nom_matiere']; ?></td>
                                                        <td><?php echo $row['note_dc']; ?></td>
                                                        <td><?php echo $row['note_ds']; ?></td>
                                                        <td><?php echo $row['note_np']; ?></td>

                                                        
                                                        <td><?php echo $row['moyenne']; ?></td>

                                                        <td></td>
                                                   
                                                        <td><a href="FormulaireModifierNote.php?edite=<?php echo $row['cin_etudiant']; ?>&val2=<?= $row['nom_matiere']; ?>"><input type="button" id="ll_btn2" value="Editer"></td>
                                                        <td><a href="supprimerNote.php?delete=<?php echo $row['cin_etudiant']; ?>&val2=<?= $row['nom_matiere'];?>" class="btn-del"><input type="button" id="ll_btn" value="Supprimer"></td>
                                                       

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