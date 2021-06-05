<div class="sidebar" data-background-color="black" data-active-color="danger">
            <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="../index.php" class="simple-text">
                    leaders-university
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="ti-dashboard"  style="color:#66d7fd"></i>
                            <p style="color:#66d7fd">Dashboard</p>
                        </a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <div style="display: flex;">
                        <img src="https://img.icons8.com/emoji/30/000000/man-student.png"/>
                            <p>Étudiants</p>
                            </div>
                        </a>
                        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded" style="margin-left: 20px; ">
                                <p class="collapse-header">Custom Utilities:</p>
                                <div style=" border-radius: 20px;background-color: #fff; width:230px ;height: 100px;  
 ">
                                    <div style="padding-top:10px ;">
                                        <a class="collapse-item" href="Etudiant.php">
                                            <div>
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Liste des étudiants
                                                <p>

                                            </div>
                                        </a>
                                        <br>
                                        <a class="collapse-item" href="FormulaireAjouterEtudiant.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Ajouter Etudiant
                                                <p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <div style="display: flex;">
                        <img src="https://img.icons8.com/color/30/000000/teacher.png"/>                                            

                        <p>Enseignants</p>
                        </div>

                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded" style="margin-left: 20px; ">
                                <p class="collapse-header">Custom Utilities:</p>
                                <div style=" border-radius: 20px;background-color: #fff; width:230px ;height:100px;  
 ">
                                    <div style="padding-top: 10px;">
                                        <a class="collapse-item" href="Enseignant.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Liste des Enseignants
                                                <p>
                                            </div>

                                        </a>
                                        <br>
                                        <a class="collapse-item" href="FormulaireAjouterEnseignant.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Ajouter Enseignant
                                                <p>
                                            </div>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                       <div style="display: flex;">
                        <img src="https://img.icons8.com/dusk/30/000000/class.png"/>                                            
                           <p>Classe</p>
                           </div>
                        </a>
                        <div id="collapse3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded" style="margin-left: 20px; ">
                                <p class="collapse-header">Custom Utilities:</p>
                                <div style=" border-radius: 20px;background-color: #fff; width:230px ;height:190px;  
 ">
                                    <div style="padding-top: 10px;">
                                        <a class="collapse-item" href="classe.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Liste des Classes
                                                <p>
                                            </div>

                                        </a>
                                        <br>
                                        <a class="collapse-item" href="FormulaireAjouterClasse.php">
                                            <div style="display:flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Ajouter Classe
                                                <p>
                                            </div>

                                        </a>
                                        <br>
                                        <a class="collapse-item" href="crudClasse.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Modifier/supprimer
                                                <p>
                                            </div>

                                        </a>

                                        <br>
                                        <a class="collapse-item" href="FormulaireAffecterClasseProf.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> classe dédié au profs


                                                <p>
                                            </div>

                                        </a>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                        <div style="display: flex;">
                        <img src="https://img.icons8.com/ultraviolet/30/000000/elective.png"/>                                            
                           <p>Matieres</p>
                           </div>
                        </a>
                        <div id="collapse4" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded" style="margin-left: 20px; ">
                                <p class="collapse-header">Custom Utilities:</p>
                                <div style=" border-radius: 20px;background-color: #fff; width:230px ;height:200px;  
 ">
                                    <div style="padding-top: 10px;">
                                        <a class="collapse-item" href="Matiere.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> 
Liste des Matières
                                                <p>
                                            </div>

                                        </a>
                                        <br>
                                        <a class="collapse-item" href="FormulaireAjouterMatiere.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Ajouter Matiere
                                                <p>
                                            </div>

                                        </a>
                                        <br>

                                        <a class="collapse-item" href="crudMatiere.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Modifier/supprimer
                                                <p>
                                            </div>

                                        </a>
<br>
                                        <a class="collapse-item" href="FormulaireAffecterMatiereProf.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Matiére dédié au profs


                                                <p>
                                            </div>

                                        </a>

                                        <br>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                      <div style="display: flex;">
                        <img src="https://img.icons8.com/fluent/30/000000/course-assign.png"/>                                        
                           <p>Cours</p>
                           </div>
                        </a>
                        <div id="collapse5" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded" style="margin-left: 20px; ">
                                <p class="collapse-header">Custom Utilities:</p>
                                <div style=" border-radius: 20px;background-color: #fff; width:230px ;height:100px;  
 ">
                                    <div style="padding-top: 10px;">
                                    
                                    <a class="collapse-item" href="cour.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Liste des Cours

                                                <p>
                                            </div>

                                        </a>

                                        <br>
                                        <a class="collapse-item" href="FormulaireAjouterCour.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Ajouter Cour
                                                <p>
                                            </div>

                                        </a>
                                        <br>

                                   

                   

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>







                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                    <div style="display: flex;">
                        <img src="https://img.icons8.com/nolan/30/note.png"/>                                       
                           <p>Notation</p>
                           </div>
                        </a>
                        <div id="collapse8" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded" style="margin-left: 20px; ">
                                <p class="collapse-header">Custom Utilities:</p>
                                <div style=" border-radius: 20px;background-color: #fff; width:230px ;height:150px;  
 ">
                                    <div style="padding-top: 10px;">
                                        <a class="collapse-item" href="FormulaireAjouterNote.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Ajouter Note
                                                <p>
                                            </div>

                                        </a>
                                        <br>
                                        <a class="collapse-item" href="ListeDeNotes.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Liste de notes
                                                <p>
                                            </div>

                                        </a>

                                        <br>

                                        <a class="collapse-item" href="FormualireMoyenne.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Ajouter Moyenne Generale
                                                <p>
                                            </div>

                                        </a>

                                        <br>

                                      
                                        FormualireMoyenne
                                   

                   

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

     
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                        <div style="display: flex;">
                        <img src="https://img.icons8.com/plasticine/30/000000/book.png""/>                                       
                           <p>Seance Cours</p>
                           </div>
                        </a>
                        <div id="collapse9" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded" style="margin-left: 20px; ">
                                <p class="collapse-header">Custom Utilities:</p>
                                <div style=" border-radius: 20px;background-color: #fff; width:230px ;height:90px;  
 ">
                                    <div style="padding-top: 10px;">
                                        <a class="collapse-item" href="SeanceCour.php">
                                            <div style="display: flex;">
                                                <i class="fa fa-circle-o" style="font-size: 10px;"></i>
                                                <p> Seance cour
                                                <p>
                                            </div>

                                        </a>
                                        <br>
                                  

                                    

                                   

                   

                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                  

                    

                  


                </ul>
            </div>
        </div>