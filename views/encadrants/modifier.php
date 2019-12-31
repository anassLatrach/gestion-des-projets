<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Encadrants
								</h3>
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
													Modifier un Encadrants
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
													<input type="text" name="nom" class="form-control m-input" value="<?php echo $_POST['nom'] ?>" required>
												</div>
												<div class="col-lg-6">
													<label class="">
														Prenom:
													</label>
													<input type="text" name="prenom" class="form-control m-input"  value="<?php echo $_POST['prenom'] ?>" required>
												</div>
											</div>
											<div class="form-group m-form__group row">
												<div class="col-lg-6">
													<label>
														email:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="email" name="email" class="form-control m-input"  value="<?php echo $_POST['email'] ?>" required>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-map-marker"></i>
															</span>
														</span>
													</div>
												</div>
												<div class="col-lg-6">
													<label class="">
														Num Tel°:
													</label>
													<div class="m-input-icon m-input-icon--right">
														<input type="tel" name="tel" class="form-control m-input"  value="<?php echo $_POST['tel'] ?>" required>
														<span class="m-input-icon__icon m-input-icon__icon--right">
															<span>
																<i class="la la-phone"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
											<div class="m-form__actions m-form__actions--solid">
												<div class="row">
													<div class="col-lg-6">
                                                         <input type="hidden" name="id"  value="<?php echo $_POST['id']; ?>">     
														<input type="submit" name="submit" value="Modifier" class="btn btn-primary">
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
