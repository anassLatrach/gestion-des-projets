
<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Etudiants
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
													Modifier un ètudiant
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
										<div class="m-portlet__body">
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
													Nom:
													</label>
													<input type="text" name="nom" value="<?php echo $_POST['nom']?>" class="form-control m-input" required>
												</div>
												<div class="col-lg-6">
													<label class="">
														Prenom:
													</label>
													<input type="text" name="prenom" class="form-control m-input" value="<?php echo $_POST['prenom']?>" required>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														email:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="email" name="email" class="form-control m-input" value="<?php echo $_POST['email']?>" required>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-map-marker"></i>
															</span>
														</span>
													</div>
												</div>
												<div class="col-lg-6">
													<label>
														Num Tel°:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="tel" name="tel" class="form-control m-input" value="<?php echo $_POST['tel']; ?>" required>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-phone"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
											
											<div class="form-group m-form__group">
												<label for="exampleSelect1">
													Niveau:
												</label>
												<select class="form-control m-input" name="niveau" id="exampleSelect1" required>

												
												<option value="<?php echo $_POST['niveau']; ?>" >
												Niveau actuel :	<?php echo $_POST['niveau']; ?>
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
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														Date de naissance:
													</label>
													<div class="m-input-icon m-input-icon--right">
												        <input class="form-control m-input" type="date"  value="<?php echo $_POST['dob']; ?>" name="date" id="example-date-input" required>
											
													</div>
												</div>
												<div class="col-lg-6">
													<label for="exampleInputEmail1">
														Photo :
													</label>
													<div class="m-input-icon m-input-icon--right">
														<div class="custom-file">
														<div class="m-card-user m-card-user--sm">
                                                    <div class="m-card-user__pic" content="Content-Type:image/jpg">
														<img class="m--img-rounded m--marginless" src="data:image/jpg;base64,<?php echo $_POST['photo'] ?> " name="photo"/>
														
													</div>
												</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
														<input type="hidden" name="id" value="<?php echo $_POST['id']?>">	
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
