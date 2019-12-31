<style>
	.m-subheader .m-subheader__breadcrumbs.m-nav > .m-nav__item > .m-nav__link > .m-nav__link-text{
		color:#6f727d;
	}


</style>
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
									<li class="m-nav__item active">
										<a href="<?php echo ROOT_PATH; ?>etudiants/afficher" class="m-nav__link active">
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
                                            Étudiants
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
											<a href="<?php echo ROOT_PATH;?>etudiants/ajouter" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
                                               PHOTO
											</th>
											<th title="Field #3">
												NOM
											</th>
											<th title="Field #4">
												PRENOM
											</th>
											<th title="Field #5">
												EMAIL
											</th>
											<th title="Field #6">
                                                TEL°
											</th>
											<th title="Field #7">
												DATE DE NAISSANCE
											</th>
											<th title="Field #8">
												NIVEAU
											</th>
                                            <th title="Field #9">
                                                Action 
                                            </th>
										</tr>
									</thead>
									<tbody>
                                        <?php foreach($viewmodel as $item) : ?>
										<tr>
											<td>
												<?php echo $item['id_etudiant']; ?>
											</td>
                                             <td> 
                                				<div class="m-card-user m-card-user--sm">
                                                    <div class="m-card-user__pic" content="Content-Type:image/jpg">
														
														<?php echo '<img class="m--img-rounded m--marginless" src="data:image/jpg;base64,'.base64_encode($item['photo_etudiant']) .'"/>'; ?>
														
													</div>
												</div>
											 </td>
                                            <td>
                                                <?php echo $item['nom_etudiant']; ?>
											</td>
											<td>
												<?php echo $item['prenom_etudiant']; ?>
											</td>
											<td>
												<?php echo $item['email_etudiant']; ?>
											</td>
											<td>
												<?php echo $item['um_tel_etudiant']; ?>
											</td>
											<td>
												<?php echo $item['date_de_naissance']; ?>
											</td>
                                            <td>
												<?php echo $item['id_niveau']; ?>
											</td>
                                            <td>

											<form action="<?php echo ROOT_PATH?>etudiants/modifier" method="post">
												<input type="hidden" name="id" value="<?php echo $item['id_etudiant'];?>">
												<input type="hidden" name="nom" value="<?php echo $item['nom_etudiant'];?>">
												<input type="hidden" name="prenom" value="<?php echo $item['prenom_etudiant'];?>">
												<input type="hidden" name="email" value="<?php echo $item['email_etudiant'];?>">
												<input type="hidden" name="tel" value="<?php echo $item['um_tel_etudiant'];?>">
												<input type="hidden" name="dob" value="<?php echo $item['date_de_naissance'];?>">
												<input type="hidden" name="niveau" value="<?php echo $item['id_niveau'];?>">
												<input type="hidden" name="photo" value="<?php echo base64_encode($item['photo_etudiant']);?>">
                                        		<button type="submit"  class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Modifier">
													<i class='la la-edit'></i>
												</button>
											</form>		


																				
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

