
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
												Avec Convention
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
                                            <div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
												<a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
												</a>
												<div class="m-wizard__step-info">
													<div class="m-wizard__step-title">
														3. Convention
													</div>
												</div>
											</div>
											<div class="m-wizard__step" data-wizard-target="#m_wizard_form_step_3">
												<a href="#" class="m-wizard__step-number">
													<span>
														<i class="fa  flaticon-layers"></i>
													</span>
												</a>
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
									<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
										<!--begin: Form Body -->
										<div class="m-portlet__body">
											<!--begin: Form Wizard Step 1-->
                                            
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
																	<input type="text" name="name" class="form-control m-input" placeholder="Gestion des Etudiants" >
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	Semestre:
																</label>
																<div class="col-xl-9 col-lg-9">
                                                                    <select class="form-control m-input">
                                                                        <option value="s1">
                                                                            S1
                                                                        </option>
                                                                        <option value="s2">
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
																		<input class="form-control m-input" type="date" value="2011-08-19" name="date" id="example-date-input">
																	</div>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<label class="col-xl-3 col-lg-3 col-form-label">
																	Fin:
																</label>
																<div class="col-xl-9 col-lg-9">
																	<div class="input-group">
																		<input class="form-control m-input" type="date" value="2011-08-19" name="date" id="example-date-input">
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
                                                                    <select class="form-control m-input">
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
                                                                    <select class="form-control m-input">
                                                                        <option value="1">
                                                                           Soufiane El Yahyaoui
                                                                        </option>
                                                                        <option value="2">
                                                                            El Mehdi Bendriss
                                                                        </option>
                                                                        <option value="3">
                                                                            Arbi el Alaoui
                                                                        </option>
                                                                    </select>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
                                            
                                            
											<!--end: Form Wizard Step 1-->
                    <!--begin: Form Wizard Step 2-->
											<div class="m-wizard__form-step" id="m_wizard_form_step_2">
												<div class="row">
													<div class="col-xl-8 offset-xl-2">
														<div class="m-form__section m-form__section--first">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Account Details
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-12">
																	<label class="form-control-label">
																		* URL:
																	</label>
																	<input type="url" name="account_url" class="form-control m-input" placeholder="" value="http://sinortech.vertoffice.com">
																	<span class="m-form__help">
																		Please enter your preferred URL  to your dashboard
																	</span>
																</div>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">
																		* Username:
																	</label>
																	<input type="text" name="account_username" class="form-control m-input" placeholder="" value="nick.stone">
																	<span class="m-form__help">
																		Your username to login to your dashboard
																	</span>
																</div>
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">
																		* Password:
																	</label>
																	<input type="password" name="account_password" class="form-control m-input" placeholder="" value="qwerty">
																	<span class="m-form__help">
																		Please use letters and at least one number and symbol
																	</span>
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Client Settings
																</h3>
															</div>
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">
																		* User Group:
																	</label>
																	<div class="m-radio-inline">
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" name="account_group" checked="" value="2">
																			Sales Person
																			<span></span>
																		</label>
																		<label class="m-radio m-radio--solid m-radio--brand">
																			<input type="radio" name="account_group" value="2">
																			Customer
																			<span></span>
																		</label>
																	</div>
																	<span class="m-form__help">
																		Please select user group
																	</span>
																</div>
																<div class="col-lg-6 m-form__group-sub">
																	<label class="form-control-label">
																		* Communications:
																	</label>
																	<div class="m-checkbox-inline">
																		<label class="m-checkbox m-checkbox--solid m-checkbox--brand">
																			<input type="checkbox" name="account_communication[]" checked value="email">
																			Email
																			<span></span>
																		</label>
																		<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																			<input type="checkbox" name="account_communication[]" value="sms">
																			SMS
																			<span></span>
																		</label>
																		<label class="m-checkbox m-checkbox--solid  m-checkbox--brand">
																			<input type="checkbox" name="account_communication[]" value="phone">
																			Phone
																			<span></span>
																		</label>
																	</div>
																	<span class="m-form__help">
																		Please select user communication options
																	</span>
																</div>
															</div>
														</div>
														<div class="m-separator m-separator--dashed m-separator--lg"></div>
														<div class="m-form__section">
															<div class="m-form__heading">
																<h3 class="m-form__heading-title">
																	Delivery Type
																</h3>
															</div>
															<div class="form-group m-form__group">
																<div class="row">
																	<div class="col-lg-6">
																		<label class="m-option">
																			<span class="m-option__control">
																				<span class="m-radio m-radio--state-brand">
																					<input type="radio" name="billing_delivery" value="">
																					<span></span>
																				</span>
																			</span>
																			<span class="m-option__label">
																				<span class="m-option__head">
																					<span class="m-option__title">
																						Standart Delevery
																					</span>
																					<span class="m-option__focus">
																						Free
																					</span>
																				</span>
																				<span class="m-option__body">
																					Estimated 14-20 Day Shipping 
                                                (&nbsp;Duties end taxes may be due 
                                                upon delivery&nbsp;)
																				</span>
																			</span>
																		</label>
																	</div>
																	<div class="col-lg-6">
																		<label class="m-option">
																			<span class="m-option__control">
																				<span class="m-radio m-radio--state-brand">
																					<input type="radio" name="billing_delivery" value="">
																					<span></span>
																				</span>
																			</span>
																			<span class="m-option__label">
																				<span class="m-option__head">
																					<span class="m-option__title">
																						Fast Delevery
																					</span>
																					<span class="m-option__focus">
																						$&nbsp;8.00
																					</span>
																				</span>
																				<span class="m-option__body">
																					Estimated 2-5 Day Shipping
                                                (&nbsp;Duties end taxes may be due
                                                upon delivery&nbsp;)
																				</span>
																			</span>
																		</label>
																	</div>
																</div>
																<div class="m-form__help">
																	<!--must use this helper element to display error message for the options-->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 2--> 
                    <!--begin: Form Wizard Step 3-->
											
														<!--end::Section-->
                                <!--end::Section-->

													</div>
												</div>
											</div>
											<!--end: Form Wizard Step 3-->
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
														<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
															<span>
																<i class="la la-check"></i>
																&nbsp;&nbsp;
																<span>
																	Submit
																</span>
															</span>
														</a>
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
