<?php
class ProjetModel extends Model{
    /*  convention */
    public function convention(){
     $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     if($post['submit']){
            $image = file_get_contents($_FILES['image_convention']['tmp_name']);
         
			$query = $this->query('INSERT INTO convention
            (date_envoi, date_validation, date_signature, secteur_activite, nom_encadrant_externe,prenom_encadrant_externe,num_tel_encadrant_externe,email_encadrant_externe,image_convention,id_projet,id_societe) 
            VALUES
            (:date_envoi, :date_validation, :date_signature, :secteur_activite, :nom_encadrant_externe, :prenom_encadrant_externe,:num_tel_encadrant_externe,:email_encadrant_externe,:image_convention,:id_projet,:id_societe)');
			$this->bind(':date_envoi',$post['date_envoi']);
			$this->bind(':date_validation', $post['date_validation']);
			$this->bind(':date_signature', $post['date_signature']);
			$this->bind(':secteur_activite', $post['secteur_activite']);
			$this->bind(':nom_encadrant_externe',  $post['nom_encadrant_externe']);
			$this->bind(':prenom_encadrant_externe',  $post['prenom_encadrant_externe']);
			$this->bind(':num_tel_encadrant_externe',  $post['num_tel_encadrant_externe']);
			$this->bind(':email_encadrant_externe',  $post['email_encadrant_externe']);
			$this->bind(':image_convention',  $image);
			$this->bind(':id_projet',  $post['id_projet']);
			$this->bind(':id_societe',  $post['id_societe']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
                
                echo  '<script>window.location.href = "'.ROOT_URL.'projets/afficheconvention "</script>';
			}
		}
		return;
    }
    
    
     public function afficherConvention(){
        $this->query('SELECT * FROM convention');
		$rows = $this->resultSet();
		return $rows;
		return;
  
    }
    
     public function afficherConventionProjet($id){
        $this->query('SELECT * FROM convention con,projet proj,societe soc 
                        WHERE
                        con.id_projet = proj.id_projet
                        AND
                        con.id_societe = soc.id_societe
                        AND
                        con.id_societe =  '. $id);
        $rows = $this->resultSet();
		return $rows;
	}
    
    public function supprimerconvention(){
        $this->query('DELETE FROM convention WHERE id_convention = :id');
        $this->bind(':id', $_POST['id']);
        $this->execute();
		return;
    }
    
    
    
    
    /*****Ajouter *******/
    
    public function ajouterconvention(){
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			$query = $this->query('INSERT INTO projet 
            (titre_projet, semestre_projet, date_debut, date_fin, id_niveau,id_encadrant,id_convention) 
            VALUES
            (:titre_projet, :semestre, :date_debut, :date_fin, :id_niveau, :id_encadrant,:file)');
			$this->bind(':titre_projet',$post['titre_projet']);
			$this->bind(':semestre', $post['semestre']);
			$this->bind(':date_debut', $post['date_debut']);
			$this->bind(':date_fin', $post['date_fin']);
			$this->bind(':id_niveau',  $post['niveau']);
			$this->bind(':id_encadrant',  $post['encadrant']);
			$this->bind(':file',  $post['file']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'projets/afficher');
			}
		}
		return;
        
    }
    public function modifierconvention(){
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     if(isset($post['submit'])){
            $image = file_get_contents($_FILES['image_convention']['tmp_name']);
         
			$query = $this->query('UPDATE convention
            
            date_envoi                   =      :date_envoi, 
            date_validation              =      :date_validation, 
            date_signature               =      :date_signature, 
            secteur_activite             =      :secteur_activite,
            nom_encadrant_externe        =      :nom_encadrant_externe,
            prenom_encadrant_externe     =      :prenom_encadrant_externe,
            num_tel_encadrant_externe    =      :num_tel_encadrant_externe,
            email_encadrant_externe      =      :email_encadrant_externe,
            image_convention             =      :image_convention,
            id_projet                    =      :id_projet,
            id_societe                   =      :id_societe
            WHERE 
            id_convention                =      :id
            ');
			$this->bind(':id',$_POST['id']);
			$this->bind(':date_envoi',$post['date_envoi']);
			$this->bind(':date_validation', $post['date_validation']);
			$this->bind(':date_signature', $post['date_signature']);
			$this->bind(':secteur_activite', $post['secteur_activite']);
			$this->bind(':nom_encadrant_externe',  $post['nom_encadrant_externe']);
			$this->bind(':prenom_encadrant_externe',  $post['prenom_encadrant_externe']);
			$this->bind(':num_tel_encadrant_externe',  $post['num_tel_encadrant_externe']);
			$this->bind(':email_encadrant_externe',  $post['email_encadrant_externe']);
			$this->bind(':image_convention',  $image);
			$this->bind(':id_projet',  $post['id_projet']);
			$this->bind(':id_societe',  $post['id_societe']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
                
                echo  '<script>window.location.href = "'.ROOT_URL.'projets/afficheconvention "</script>';
			}
		}
        return;
    
    }    
   

    /* Sans Convention  */
    public function afficher(){
        $this->query('SELECT * FROM projet');
		$rows = $this->resultSet();
		return $rows;
		return;
  
    }
    public function afficherbyID($id){
        $this->query('SELECT * FROM projet WHERE id_projet ='.$id);
		$rows = $this->resultSet();
		return $rows;
  
    }
    public function ajoutersansconvention(){ 
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			$query = $this->query('INSERT INTO projet 
            (titre_projet, semestre_projet, date_debut, date_fin, id_niveau,id_encadrant,id_convention) 
            VALUES
            (:titre_projet, :semestre, :date_debut, :date_fin, :id_niveau, :id_encadrant,:convention)');
			$this->bind(':titre_projet',$post['titre_projet']);
			$this->bind(':semestre', $post['semestre']);
			$this->bind(':date_debut', $post['date_debut']);
			$this->bind(':date_fin', $post['date_fin']);
			$this->bind(':id_niveau',  $post['niveau']);
			$this->bind(':id_encadrant',  $post['encadrant']);
            if($post['convention'] != NULL){
			  $this->bind(':convention',$post['convention']); 
            }else
            {
               $this->bind(':convention',null); 
            }
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'projets/afficher');
			}
		}
        return;
    
}
    public function modifiersansconvention(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['submit'])){
			
            
			$query = $this->query('UPDATE  projet  SET 
            titre_projet =:titre_projet, 
            semestre_projet =:semestre,
            date_debut =:date_debut,
            date_fin =:date_fin,
            id_niveau =:id_niveau,
            id_encadrant =:id_encadrant WHERE id_etudiant = :id' );
			$this->bind(':id', $_POST['id']);
			$this->bind(':titre_projet',$post['titre_projet']);
			$this->bind(':semestre', $post['semestre']);
			$this->bind(':date_debut', $post['date_debut']);
			$this->bind(':date_fin', $post['date_fin']);
			$this->bind(':id_niveau',  $post['niveau']);
			$this->bind(':id_encadrant',  $post['encadrant']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'etudiants/afficher');
			}
        }
        return;
}
    public function supprimerprojet(){
        $this->query('DELETE FROM projet WHERE id_projet = :id');
        $this->bind(':id', $_POST['id']);
        $this->execute();
		return;
    }
    

    public function afficherEncadrant(){
        $this->query('SELECT * FROM encadrant');
		$rows = $this->resultSet();
		return $rows;
    }
    public function afficherEncadrantbyID($id){
        $this->query('SELECT * FROM encadrant WHERE id_encadrant = '. $id);
        $rows = $this->resultSet();
		return $rows;
	}

    
    public function afficherTech(){
        $this->query('SELECT * from technologie tech,categorie cat where tech.id_categorie = cat.id_categorie');
        $rows = $this->resultSet();
		return $rows;
       
    }
    
    public function afficherCat(){
         $this->query('SELECT * from categorie');
        $rows = $this->resultSet();
		return $rows;
        
    }
    
    public function afficherCatbyID($id){
         $this->query("SELECT  * from technologie tech,categorie cat where tech.id_categorie = cat.id_categorie 
and cat.id_categorie = ".$id);
        $rows = $this->resultSet();
		return $rows;
        
    }
    /**** Societe **/
    public function societe(){
          $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			$query = $this->query('INSERT INTO societe
            (nom_societe,adresse_societe)
            VALUES
            (:nom_societe, :adresse_societe)');
			$this->bind(':nom_societe',$post['nom_societe']);
			$this->bind(':adresse_societe', $post['adresse_societe']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'projets/afficher');
			}
		}
        return;
        
    }
    
     public function afficherSociete(){
         $this->query('SELECT * from societe');
        $rows = $this->resultSet();
		return $rows;
     }
    /*** END:Societe  ***/
    
    
    
        public function afficherEtudiants(){
          
        $this->query('SELECT * FROM etudiant');
		$rows = $this->resultSet();
		return $rows;
     } 
    
    public function affectationtech(){
         $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($post['submit'])){
            $techArray =$post['tech'] ;
		 foreach ($techArray as $value) {
            $query = $this->query('
            INSERT into projet_categorie VALUES (:categorie, :projet, :tech)');
			$this->bind(':categorie', $post['categorie']);
			$this->bind(':projet',$post['projet']);
			$this->bind(':tech',$value); 
             $this->execute();
          }
          if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'projets/afficher');
			}  
        }
        
		return ;
     }
     
    public function affectationetudiant(){
         $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($post['submit'])){
        $etudiantArray =$post['etudiant'] ;
		 foreach ($etudiantArray as $value) {
            $query = $this->query('
            INSERT into projet_etudiant VALUES (:etudiant, :projet)');
			$this->bind(':etudiant',$value); 
			$this->bind(':projet', $post['projet']);
             $this->execute();
          }
          if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'projets/afficher');
			}  
        }
        
		return ;
     }
    
     public function afficherNiveau(){
          
        $this->query('SELECT * FROM niveau');
		$rows = $this->resultSet();
		return $rows;
     } 
    
     public function afficherEtudiantById($id){
         $this->query("SELECT * FROM etudiant etud,niveau niv where etud.id_niveau = niv.id_niveau and niv.id_niveau = ".$id);
        $rows = $this->resultSet();
		return $rows;
        
    }
    
    public function afficherProjetCategorie($id){
         // pc.id_projet,proj.titre_projet,cat.nom_categorie,tech.nom_technologie
         $this->query("SELECT pc.id_projet,proj.titre_projet,cat.nom_categorie,tech.nom_technologie FROM projet_categorie pc,projet proj,categorie cat, technologie tech 
         WHERE 
         pc.id_projet = proj.id_projet 
         AND 
         pc.id_categorie = cat.id_categorie
         AND
         pc.id_technologie = tech.id_technologie 
         AND
         pc.id_projet =".$id);
        $rows = $this->resultSet();
		return $rows;
        
    }
     public function afficherProjetEtudiant($id){
         // et.nom_etudiant,et.prenom_etudiant,proj.titre_projet
         $this->query("SELECT *
            FROM projet_etudiant pe,etudiant et,projet proj,niveau niv 
            WHERE 
            pe.id_etudiant = et.id_etudiant 
            AND
            pe.id_projet = proj.id_projet
            AND 
            proj.id_niveau = niv.id_niveau
            AND
            niv.id_niveau =".$id);
        $rows = $this->resultSet();
		return $rows;
        
    }
   
    
    /****** Categorie    *****/
    
    
     public function ajoutercategorie(){
          $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			$query = $this->query('INSERT INTO categorie
            (nom_categorie)
            VALUES
            (:nom_categorie)');
			$this->bind(':nom_categorie',$post['nom_categorie']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'projets/afficher');
			}
		}
        return;
        
    }
    
     public function ajoutertechnologie(){
          $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
            $categorieArray =$post['categorie'];
		 foreach ($categorieArray as $value) {
			$query = $this->query('INSERT INTO technologie
            (nom_technologie,id_categorie)
            VALUES
            (:nom_technologie,:id_categorie)');
			$this->bind(':nom_technologie',$post['nom_technologie']);
			$this->bind(':id_categorie',$value);
			$this->execute();
         }
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'projets/afficher');
			}
		}
        return;
        
    }
    
    
    
   
}