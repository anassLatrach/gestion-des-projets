<?php
    $projetAff = new ProjetModel();
    $cat = $projetAff->afficherCat();
?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Ajouter Categorie

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
										<a href="<?php echo ROOT_PATH; ?>projets/ajoutercatergorie" class="m-nav__link">
											<span class="m-nav__link-text">
												Ajouter
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?php echo ROOT_PATH; ?>projets/affectationtech" class="m-nav__link">
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
													Ajouter Categorie
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed demoForm" method="post" action="<?php $_SERVER['PHP_SELF']; ?>  " id="demoForm">
								    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                              <div class="col-lg-12">
													<label>
                                                        Categorie :<i>(ctrl + select pour choix multiple)</i>
													</label>
													<div class="m-input-icon m-input-icon--right">
													 <select name="categorie[]" multiple="multiple" class="form-control m-input " data-live-search="true" id="categorie">
                                                                <?php foreach($cat as $itemCat) {?>
                                                            <option value="<?php echo $itemCat['id_categorie'];?>"><?php echo $itemCat['nom_categorie'];?></option>
                                                        <?php } ?>
                                                    </select>
													</div>
                                                </div>
												<div class="col-lg-12">
													<label>
													Nom Technologie :
                                                     </label>
													<div class="m-input-icon m-input-icon--right">
													<input type="text" name="nom_technologie" class="form-control m-input" placeholder="ex:ajax..." >
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
