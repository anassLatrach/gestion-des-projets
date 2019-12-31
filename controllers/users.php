<?php
class Users extends Controller{
	protected function register(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->register(), true);
	}

	protected function index(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->index(), true);
	}

	protected function logout(){
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		// Redirect
		header('Location: '.ROOT_URL);
	}
    
    	protected function profile(){
		$viewmodel = new UserModel();
		$this->returnView($viewmodel->profile(), true);
	}

}