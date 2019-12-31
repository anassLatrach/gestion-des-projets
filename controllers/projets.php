<?php
class Projets extends Controller{
	protected function avecconvention(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->ajouterconvention(), true);
	}
    
    protected function sansconvention(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->ajoutersansconvention(), true);
	}
    
    	protected function afficher(){
            if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->afficher(), true);
	}
	protected function  modifiersansconvention(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->modifiersansconvention(), true);
	}
    
    
    protected function projet(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->ajoutersansconvention(), true);
	}
     protected function societe(){
         if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->societe(), true);
	}
   protected function afficherEtudiants(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->afficherEtudiants(), true);
	}

    protected function affectationtech(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->affectationtech(), true);
	}
    
    protected function affectationetudiant(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->affectationetudiant(), true);
	}
    
    
    protected function convention(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->convention(), true);
	}
    protected function afficheconvention(){
        if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->afficherConvention(), true);
	}
    
     protected function supprimerconvention(){
         if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->supprimerconvention(), true);
	}
     protected function ajoutercategorie(){
         if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->ajoutercategorie(), true);
	}
     protected function ajoutertechnologie(){
         if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->ajoutertechnologie(), true);
	}
     protected function modifierconvention(){
         if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->modifierconvention(), true);
	}
    protected function supprimerprojet(){
         if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL);
		}
		$viewmodel = new ProjetModel();
		$this->returnView($viewmodel->supprimerprojet(), true);
	}
    
    
    
    
}