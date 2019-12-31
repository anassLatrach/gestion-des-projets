    <?php if(!isset($_SESSION['is_logged_in'])) : ?>
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(<?php echo ROOT_PATH;?>assets/app/media/img//bg/bg-1.jpg);">
				<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img  src="<?php echo ROOT_URL; ?>assets/demo/default/media/img/logo/logo-vinci.png"/>
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									Connecte Toi
								</h3>
							</div>
							<form method="post" class="m-login__form m-form">
								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="Email" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password">
								</div>
								<div class="m-login__form-action">
									<input id="m_login_signin_submit" name="submit" type="submit" value="Sign In" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary" >
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

<?php endif; ?>