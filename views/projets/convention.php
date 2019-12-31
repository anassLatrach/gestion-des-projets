<?php 
	$projetAff = new ProjetModel();
	$res = $projetAff->afficherEncadrant();
    $tech = $projetAff->afficherTech();
    $cat = $projetAff->afficherCat();
    $projet = $projetAff->afficher();
    $etudiant= $projetAff->afficherEtudiants();
    $societe= $projetAff->afficherSociete();
   
	?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Convention
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
													Ajouter une Convention
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed demoForm" method="post" action="<?php $_SERVER['PHP_SELF']; ?>  " id="demoForm" enctype="multipart/form-data">
								    <div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
													Date Envoi:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input class="form-control m-input" type="date" name="date_envoi" id="example-date-input">
													</div>
												</div>
												<div class="col-lg-6">
													<label>
													Date Validation:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input class="form-control m-input" type="date" name="date_validation" id="example-date-input">
													</div>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
													Date Signature :
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input class="form-control m-input" type="date" name="date_signature" id="example-date-input">
													</div>
												</div>
											</div>
                                        <div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
													Secteur Activite :
                                                     </label>
													<div class="m-input-icon m-input-icon--right">
													<input type="text" name="secteur_activite" class="form-control m-input" placeholder="ex: Gestion des Etudiants" >
													</div>
												</div>
                                            </div>
                                        <div class="form-group m-form__group row">
                                            <div class="col-lg-6">
													<label>
													Nom Encadrant:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input type="text" name="nom_encadrant_externe" class="form-control m-input" placeholder="ex: Gestion des Etudiants" >			
													</div>
                                            </div>
                                            <div class="col-lg-6">
													<label>
													Prenom Encadrant:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input type="text" name="prenom_encadrant_externe" class="form-control m-input" placeholder="ex: Gestion des Etudiants" >			
													</div>
                                            </div>
                                            <div class="col-lg-6">
													<label>
													Numero de tel° Encadrant:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input type="tel" name="num_tel_encadrant_externe" class="form-control m-input" placeholder="ex: Gestion des Etudiants" >			
													</div>
                                            </div>
                                            <div class="col-lg-6">
													<label>
													Email Encadrant:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input type="email" name="email_encadrant_externe" class="form-control m-input" placeholder="ex: Gestion des Etudiants" >			
													</div>
                                            </div>
                                        </div>
                                        
											<div class="form-group m-form__group row">
												<div class="col-lg-12">
													<label>
													Convention :
													</label>
													<div class="m-input-icon m-input-icon--right">
														<div class="custom-file">
															<input type="file" name="image_convention" class="custom-file-input" id="customFile" required>
															<label class="custom-file-label" for="customFile">
															choisir un fichier
															</label>
														</div>
													</div>
												</div>
								            </div>
										<div class="form-group m-form__group row">	
                                            <div class="col-lg-12">
                                                        <label>
                                                        Projet :
                                                        </label>
                                                        <div class="m-input-icon m-input-icon--right">
                                                            <select  class="form-control m-bootstrap-select m_selectpicker" name="id_projet" data-live-search="true">

                                                            <?php foreach($projet as $itemProjet) {?>
                                                                <option value="<?php echo $itemProjet['id_projet'];?>"><?php echo $itemProjet['titre_projet'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        </div>
                                                </div>
                                                <div class="col-lg-12">
                                                        <label>
                                                       Societe :
                                                        </label>
                                                        <div class="m-input-icon m-input-icon--right">
                                                            <select  class="form-control m-bootstrap-select m_selectpicker" name="id_societe" data-live-search="true">

                                                            <?php foreach($societe as $itemSociete) {?>
                                                                <option value="<?php echo $itemSociete['id_societe'];?>"><?php echo $itemSociete['nom_societe'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        </div>
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
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
							</div>
						</div>
	</div>
</div>
