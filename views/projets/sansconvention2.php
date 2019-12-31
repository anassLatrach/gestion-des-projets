<?php 
	$projetAff = new ProjetModel();
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
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Sans Convention
											</span>
										</a>
									</li>
                                </ul>
							</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<!--Begin::Main Portlet-->
						<div class="m-portlet m-portlet--full-height">
							<!--begin: Portlet Head-->
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Projet
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
												<i class="flaticon-info m--icon-font-size-lg3"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<!--end: Portlet Head-->
  						    <!--begin: Form Wizard-->
							<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">
								<!--begin: Message container -->
								<div class="m-portlet__padding-x">
									<!-- Here you can put a message or alert -->
								</div>
								<!--end: Message container -->
    						    <!--begin: Form Wizard Head -->
								<div class="m-wizard__head m-portlet__padding-x">
									<!--begin: Form Wizard Progress -->
									<div class="m-wizard__progress">
										<div class="progress">
											<div class="progress-bar" role="progressbar"  aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<!--end: Form Wizard Progress -->  
           							 <!--begin: Form Wizard Nav -->
									<div class="m-wizard__nav">
										<div class="m-wizard__steps">
											<div class="m-wizard__step m-wizard__step--current"  data-wizard-target="#m_wizard_form_step_1">
												<a href="#"  class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-placeholder"></i>
													</span>
												</a>
												<div class="m-wizard__step-info">
													<div class="m-wizard__step-title">
														1. Informations du Projet 
													</div>
                                                </div>
											</div>
											<div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_2">
												<a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
												</a>
												<div class="m-wizard__step-info">
													<div class="m-wizard__step-title">
														2. Affectation
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end: Form Wizard Nav -->
								</div>
								<!--end: Form Wizard Head -->  
        <!--begin: Form Wizard Form-->
								<div class="m-wizard__form">
									<!--
                1) Use m-form--label-align-left class to alight the form input lables to the right
                2) Use m-form--state class to highlight input control borders on form validation
                -->
									<form class="m-form m-form--label-align-left- m-form--state-" id="m_form" method="POST">
										<!--begin: Form Body -->
										<div class="m-portlet__body">
											<!--begin: Form Wizard Step 1-->
											<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Informations du Projet 
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	Titre du projet:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<input type="text" name="titre_projet" class="form-control m-input" placeholder="ex: Gestion des Etudiants" >
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																Semestre :
																</label>
																<div class="col-xl-9 col-lg-9">
																<select name="semestre" class="form-control m-input">
																<option value="">
                                                                            Select 
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
																<label class="col-xl-3 col-lg-3 col-form-label">
																	Debut:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<div class="input-group">
																		<input class="form-control m-input" type="date" name="date_debut" id="example-date-input">
																	</div>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	Fin:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<div class="input-group">
																		<input class="form-control m-input" type="date" name="date_fin" id="example-date-input">
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 1-->
                                            
											<div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_2">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Affectation
																</h3>
															</div>
                                                            <div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																    Niveau:
																</label>
																<div class="col-xl-9 col-lg-9">
                                                                    <select  name="niveau" class="form-control m-input">
																	<option value="">
                                                                            Choisir :
                                                                        </option>
                                                                        <option value="1">
                                                                            1
                                                                        </option>
                                                                        <option value="2">
                                                                            2
                                                                        </option>
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

															
                                                            <div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																Encadrant:
																</label>
																<div class="col-xl-9 col-lg-9">
                                                                    <select  name="encadrant" class="form-control m-input">
																	<option value="">
                                                                            Choisir :
                                                                        </option>
                                                                        <?php foreach($res as $item) : ?>
                                                                        <option value=<?php echo $item['id_encadrant']?>>
																		<?php echo $item['nom_encadrant'] ."  ".$item['prenom_encadrant'];  ?>
                                                                        </option>
																	<?php endforeach;?>
                                                                    </select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--end: Form Body -->
                <!--begin: Form Actions -->
										<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
											<div class="m-form__actions">
												<div class="row">
													<div class="col-lg-2"></div>
													<div class="col-lg-4 m--align-left">
														<a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
															<span>
																<i class="la la-arrow-left"></i>
																&nbsp;&nbsp;
																<span>
																	Back
																</span>
															</span>
														</a>
													</div>
													<div class="col-lg-4 m--align-right">

														<button name="submit" type="submit" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
															<span>
																<i class="la la-check"></i>
																&nbsp;&nbsp;
																<span>
																	Submit
																</span>
															</span>
														</button>
														<a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
															<span>
																<span>
																	Save & Continue
																</span>
																&nbsp;&nbsp;
																<i class="la la-arrow-right"></i>
															</span>
														</a>
													</div>
													<div class="col-lg-2"></div>
												</div>
											</div>
										</div>
										<!--end: Form Actions -->
									</form>
								</div>
								<!--end: Form Wizard Form-->
							</div>
							<!--end: Form Wizard-->
						</div>
						<!--End::Main Portlet-->
					</div>
				</div>
</div>
