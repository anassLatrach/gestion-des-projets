<?php
class Encadrants extends Controller{
	protected function ajouter(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new EncadrantModel();
		$this->returnView($viewmodel->ajouter(), true);
	}
    protected function afficher(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new EncadrantModel();
		$this->returnView($viewmodel->afficher(), true);
	}

	protected function modifier(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new EncadrantModel();
		$this->returnView($viewmodel->modifier(), true);
	}

	protected function supprimer(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new EncadrantModel();
		$this->returnView($viewmodel->supprimer(), true);
	}
}