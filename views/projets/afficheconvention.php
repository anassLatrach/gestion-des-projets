<?php
    $projetAff = new ProjetModel();

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
										<a href="<?php echo ROOT_PATH; ?>projets/convention" class="m-nav__link">
											<span class="m-nav__link-text">
												Ajouter
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="<?php echo ROOT_PATH; ?>projets/afficheconvention" class="m-nav__link">
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
                                            Convention
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
											<a href="<?php echo ROOT_PATH;?>projets/convention" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
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
												Date Envoi
											</th>
											<th title="Field #3">
												Date Validation
											</th>
                                            <th title="Field #3">
												Date Signature
											</th>
											<th title="Field #5">
												Secteur Activite
											</th>
											<th title="Field #6">
                                                Encadrant
											</th>
                                            <th title="Field #7">
                                                Tel°
                                            </th>
											<th title="Field #8">
												Email
                                            </th>
											<th title="Field #9">
												Convention 
                                            </th>
											<th title="Field #10">
												Societe
                                            </th>
                                            <th title="Field #11">
												Projet
                                            </th>
											<th title="Field #12">
                                                Actions
                                            </th>
										</tr>
									</thead>
									<tbody>
                                        <?php foreach($viewmodel as $item) : ?>
										<tr>
											<td>
												<?php echo $item['id_convention']; ?>
											</td>
											<td>
                                                <?php echo $item['date_envoi']; ?>
											</td>
											<td>
												<?php echo $item['date_validation']; ?>
											</td>
                                            <td>
												<?php echo $item['date_signature']; ?>
											</td>
											<td>
												<?php echo $item['secteur_activite']; ?>
											</td>
											<td>
												<?php echo $item['nom_encadrant_externe'] . " " .$item['prenom_encadrant_externe']; ?>
											</td>
											<td>
												<?php echo $item['num_tel_encadrant_externe']; ?>
											</td>
											
											<td>
                                                <?php echo $item['email_encadrant_externe']; ?>
											
											</td>
                                            <td>
                                                
                                                <div class="m-card-user m-card-user--sm">
                                                    <div class="m-card-user__pic" content="Content-Type:image/jpg">
														
														<?php 
                                                        
                                                        echo '<img class="m--img-rounded m--marginless" src="data:image/jpg;base64,'.base64_encode($item['image_convention']) .'/">'
    
    
                                                        ; ?>
                                                       
													</div>
												</div>
											</td>
											<td>										
                                            <?php  
											$id = $item['id_societe'];
                                            $ConventionProjet = $projetAff->afficherConventionProjet($id);
								            foreach($ConventionProjet  as $itemConventionProjet) :
												echo $itemConventionProjet['nom_societe'];
                                            ?>
											</td>
                                           
                                             <td>
                                                 <?php 
                                                 echo $itemConventionProjet['titre_projet'];
                                                 endforeach;?>
											</td> 
                                             <td> <div class="col-md-6">
											<div class="btn-group m-btn-group" role="group" >
												<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed" method="POST" action="<?php echo ROOT_PATH?>projets/modifierconvention/">
												<input type="hidden" name="id"  value="<?php echo $item['id_convention']; ?>">
                                                <input type="hidden" name="date_envoi"  value="<?php echo $item['date_envoi']; ?>">   
                                                <input type="hidden" name="date_validation"  value="<?php echo $item['date_validation']; ?>">
                                                <input type="hidden" name="secteur_activite"  value="<?php echo $item['secteur_activite']; ?>">   
                                                <input type="hidden" name="date_signature"  value="<?php echo $item['date_signature']; ?>">   
                                                <input type="hidden" name="nom_encadrant_externe"  value="<?php echo $item['nom_encadrant_externe']; ?>">      
                                                <input type="hidden" name="prenom_encadrant_externe"  value="<?php echo $item['prenom_encadrant_externe']; ?>">      
                                                <input type="hidden" name="num_tel_encadrant_externe"  value="<?php echo $item['num_tel_encadrant_externe']; ?>">      
                                                <input type="hidden" name="email_encadrant_externe"  value="<?php echo $item['email_encadrant_externe']; ?>">      
                                                <input type="hidden" name="id_societe"  value="<?php echo $item['id_societe']; ?>">      
                                                <input type="hidden" name="titre"  value="<?php echo $item['titre_projet']; ?>">    
												 <button type="submit" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">
							                         <i class="la la-edit"></i>
						                        </button>
												
											</form>
											<form method="POST" action="<?php echo ROOT_PATH?>projets/supprimerconvention">
												<input type="hidden" name="id"  value="<?php echo $item['id_convention']; ?>">
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