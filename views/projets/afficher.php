<?php
    $projetAff = new ProjetModel();

?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Projets
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="<?php echo ROOT_PATH; ?>" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?php echo ROOT_PATH; ?>projets/sansconvention" class="m-nav__link">
											<span class="m-nav__link-text">
												Ajouter
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?php echo ROOT_PATH; ?>projets/afficher" class="m-nav__link">
											<span class="m-nav__link-text">
												Afficher
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
                    
					<div class="m-content">
						
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
                                            Projet
										</h3>
									</div>
								</div>
							</div>
                            
							<div class="m-portlet__body">
							<?php  Messages::display(); ?>
								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-8">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-4 order-1 order-xl-2 m--align-right">
											<a href="<?php echo ROOT_PATH;?>encadrants/ajouter" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
												<span>
													<i class="la la-user-plus"></i>
													<span>
														Ajouter
													</span>
												</span>
											</a>
											<div class="m-separator m-separator--dashed d-xl-none"></div>
										</div>
									</div>
								</div>
								<!--end: Search Form -->
		<!--begin: Datatable -->
								<table class="m-datatable" id="html_table" width="100%">
									<thead>
										<tr>
											<th title="Field #1">
												#
											</th>
											<th title="Field #2">
												Titre
											</th>
											<th title="Field #3">
												Semestre
											</th>
											<th title="Field #4">
												Date Debut
											</th>
											<th title="Field #5">
                                                Date Fin
											</th>
                                            <th title="Field #6">
                                                Niveau
                                            </th>
											<th title="Field #7">
												Encadrant 
                                            </th>
											<th title="Field #8">
												Etudiants 
                                            </th>
											<th title="Field #9">
												Convention 
                                            </th>
                                            <th title="Field #10">
												Technologie 
                                            </th>
											<th title="Field #11">
                                                Actions
                                            </th>
										</tr>
									</thead>
									<tbody>
                                        <?php foreach($viewmodel as $item) : ?>
										<tr>
											<td>
												<?php echo $item['id_projet']; ?>
											</td>
											<td>
                                                <?php echo $item['titre_projet']; ?>
											</td>
											<td>
												<?php echo $item['semestre_projet']; ?>
											</td>
											<td>
												<?php echo $item['date_debut']; ?>
											</td>
											<td>
												<?php echo $item['date_fin']; ?>
											</td>
											<td>
												<?php echo $item['id_niveau']; ?>
											</td>
											
											<td>
                                                
											<?php  
											$id = $item['id_encadrant'];
								            $encadrant = $projetAff->afficherEncadrantbyID($id);
								            foreach($encadrant  as $item_enc) {
												echo $item_enc['nom_encadrant']." ".  $item_enc['prenom_encadrant'];
                                            };?>
											</td>
                                            <td>
											 <?php
                                                
                                                $id = $item['id_niveau'];
                                                $etudiant = $projetAff->afficherProjetEtudiant($id);
                                                foreach($etudiant as $itemEtudiant){
                                                    echo $itemEtudiant['nom_etudiant'] ." " .$itemEtudiant['prenom_etudiant']."<br/>";
                                                }
                                                ?>
											</td>
											<td>
												<?php echo $item['id_convention']; ?>
											</td>
                                           
                                             <td>
                                                 <?php 
                                                 $id = $item['id_projet'];
                                                $projetCategorie = $projetAff->afficherProjetCategorie($id);
                                                foreach($projetCategorie  as $itemProjetCategorie) {
                                                echo "-".$itemProjetCategorie['nom_technologie']."<br/>";  ;
                                                }?>
											</td> 
                                             <td> <div class="col-md-6">
											<div class="btn-group m-btn-group" role="group" >
                                                      
                                                <span>					
                                                    <div class="dropdown ">							
                                                        <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">                                
                                                            <i class="la la-ellipsis-h"></i>                           
                                                        </a>						  	
                                                        <div class="dropdown-menu dropdown-menu-right">						    	
                                                            <a class="dropdown-item" href="<?php echo ROOT_PATH; ?>projets/affectationtech">
                                                                <i class="la la-edit"></i> 
                                                                Affecter Technologie
                                                            </a>						    	
                                                            <a class="dropdown-item" href="<?php echo ROOT_PATH; ?>projets/affectationetudiant">
                                                                <i class="la la-edit"></i> 
                                                                Affecter Etudiants
                                                            </a>						    	
                                                            <a class="dropdown-item" href="#">
                                                                <i class="la la-print"></i> 
                                                                Generate Report
                                                            </a>						  	
                                                        </div>						
                                                    </div>					
                                                </span>
												<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" action="<?php echo ROOT_PATH?>projets/modifiersansconvention/">
												<input type="hidden" name="id"  value="<?php echo $item['id_projet']; ?>">
                                                <!--
                                                <input type="hidden" name="titre"  value="<?php echo $item['titre_projet']; ?>">   
                                                <input type="hidden" name="semestre"  value="<?php echo $item['semestre_projet']; ?>">   
                                                <input type="hidden" name="date_debut"  value="<?php echo $item['date_debut']; ?>"> 
                                                <input type="hidden" name="date_fin"  value="<?php echo $item['date_fin']; ?>">
                                                <input type="hidden" name="niveau"  value="<?php echo $item['id_niveau']; ?>">
                                                <input type="hidden" name="encadrant"  value="<?php echo $item['id_encadrant']; ?>">-->
												 <button type="submit" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
							                         <i class="la la-edit"></i>
						                        </button>
												
											</form>
											<form method="POST" action="<?php echo ROOT_PATH?>projets/supprimerprojet">
												<input type="hidden" name="id"  value="<?php echo $item['id_projet']; ?>"> 
											<button type="submit"  class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
													<i class="la la-trash"></i>
						                        </button>
												</form>
                                                
                                                
                                          
																		</div>
																	</div>
											 
                                            </td>
										</tr>
                                        
                                        <?php endforeach; ?>
									</tbody>
								</table>
								<!--end: Datatable -->
							</div>
                        </div>
                    </div>
                </div>