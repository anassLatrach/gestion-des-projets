<?php
class Etudiants extends Controller{
	protected function ajouter(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new EtudiantModel();
		$this->returnView($viewmodel->ajouter(), true);
	}
    protected function afficher(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new EtudiantModel();
		$this->returnView($viewmodel->afficher(), true);
	}

	protected function modifier(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new EtudiantModel();
		$this->returnView($viewmodel->modifier(), true);
	}
	

	
	
}