
<?php
    $projetAff = new ProjetModel();
    $tech = $projetAff->afficherTech();
    $niveau = $projetAff->afficherNiveau();
    $projet = $projetAff->afficher();
    $etudiant = $projetAff->afficherEtudiants();

?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Affectation
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
										<a href="<?php echo ROOT_PATH; ?>etudiants/ajouter" class="m-nav__link">
											<span class="m-nav__link-text">
												Ajouter
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?php echo ROOT_PATH; ?>etudiants/afficher" class="m-nav__link">
											<span class="m-nav__link-text">
												Afficher
											</span>
										</a>
									</li>
								</ul>
							</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-lg-12">
								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Affectation Des Étudiants
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed demoForm" method="post" action="<?php $_SERVER['PHP_SELF']; ?>" id="demoForm" >
										 	              
                                        <div class="form-group m-form__group row">
                                                    <div class="col-lg-12">
													<label>
													Niveau :
													</label>
													<div class="m-input-icon m-input-icon--right">
													 <select id="niveau"  class="form-control" name="niveau">
                                                         <option value="0">Niveau</option>
                                                        <?php foreach($niveau as $itemNiveau) {?>
                                                            <option value="<?php echo $itemNiveau['id_niveau'];?>"><?php echo $itemNiveau['nom_niveau'];?></option>
                                                        <?php }?>
                                                    </select>
													</div>
												</div>
                                            <div class="col-lg-12">
													<label>
													Projet :
													</label>
													<div class="m-input-icon m-input-icon--right">
                                                        <select name="projet" id="projet" class="form-control ">
                                                            <option data-available-with="0" value="0">Projet</option>
                                                        <?php foreach($projet as $itemProjet) {?>
                                                            <option data-available-with="<?php  echo $itemProjet['id_niveau'];?>" value="<?php echo $itemProjet['id_projet'];?>"><?php echo $itemProjet['titre_projet'];?></option>
                                                        <?php }?>
                                                    </select>
													</div>
												</div>
                                                    <div class="col-lg-12">
													<label>
                                                        Étudiants :<i>(ctrl + select pour choix multiple)</i>
													</label>
													<div class="m-input-icon m-input-icon--right">
													 <select name="etudiant[]" multiple="multiple" class="form-control m-input " data-live-search="true" id="etudiant">
                                                         
                                                            <option data-available-with="0" value="0">Etudiant</option>
                                                        <?php foreach($etudiant as $itemEtudiant) {?>
                                                            <option data-available-with="<?php  echo $itemEtudiant['id_niveau'];?>" value="<?php echo $itemEtudiant['id_etudiant'];?>"><?php echo $itemEtudiant['nom_etudiant']." ".$itemEtudiant['prenom_etudiant'];?></option>
                                                        <?php }?>
                                                   
                                                    </select>
													</div>
												</div>             
   
											</div>
                                        <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<input type="submit" value="Ajouter" name="submit" class="btn btn-primary">
														<button type="reset" class="btn btn-secondary">
															Annuler
														</button>
													</div>
												</div>
											</div>
										</div>
                                    </form> 
                    
    
                                </div>
                            </div>
                        </div>
                        
 