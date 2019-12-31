<?php 
	$projetAff = new ProjetModel();
    $proj= $projetAff->afficherbyID($_POST['id']);
	$res = $projetAff->afficherEncadrant();
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
													Sans Convention
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed demoForm" method="post" id="demoForm" >
										<?php foreach($proj as $itemProj) { ?>
											<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
													Titre du projet :
													</label>
													<input type="text" name="titre_projet" class="form-control m-input" value="<?php echo $itemProj['titre_projet']; ?>" >
												</div>
												<div class="col-lg-6">
													<label class="">
													Semestre :
													</label>
													<select name="semestre" class="form-control m-input">
																    <option value="<?php echo $itemProj['semestre_projet']; ?>">
                                                                            Select : S<?php echo $itemProj['semestre_projet']; ?>
                                                                        </option>
                                                                        <option value="1">
                                                                            S1
                                                                        </option>
                                                                        <option value="2">
                                                                            S2
                                                                        </option>
                                                                    </select>
												</div>
                                                
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
													Debut:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input class="form-control m-input" type="date" name="date_debut" id="example-date-input" value="<?php echo $itemProj['date_debut']; ?>">
													</div>
												</div>
												<div class="col-lg-6">
													<label>
													Fin:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<input class="form-control m-input" type="date" name="date_fin" id="example-date-input" value="<?php echo $itemProj['date_fin']; ?>">
																
													</div>
												</div>
											</div>


											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
													Niveau:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<select class="form-control m-input" name="niveau" id="exampleSelect1" required>
													<option>
														<?php echo $itemProj['id_niveau']; ?>
													</option>
                                                    <option value="1">
														1
													</option>
													<option value="2">
														2
													</option>3
													<option value="3">
														3
													</option>
													<option value="4">
														4
													</option>
													<option value="5">
														5
													</option>
												</select>
													</div>
												</div>
												<div class="col-lg-6">
													<label>
													Encadrant:
													</label>
													<div class="m-input-icon m-input-icon--right">
													<select  name="encadrant" class="form-control m-input">
																	<option value="<?php echo $itemProj['id_encadrant']; ?>">
                                                                             <?php echo $itemProj['id_encadrant']; ?>
                                                                    </option>
                                                                        <?php foreach($res as $item) : ?>
                                                                        <option value="<?php echo $item['id_encadrant']?>">
																		<?php echo $item['nom_encadrant'] ."  ".$item['prenom_encadrant'];  ?>
                                                                        </option>
																	<?php endforeach;?>
                                                    </select>			
													</div>
												</div>
                                            </div>
                                                
								<input type="hidden" value="<?php echo $itemProj['id_projet']; ?>" name="id">
                                                <?php } ?>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<input type="submit" value="Modifier" name="submit" class="btn btn-primary">
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
	
    