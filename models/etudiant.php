<?php
class EtudiantModel extends Model{
	
    //Ajouter un ÉTUDIANT
    public function ajouter(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['nom'] == '' || $post['prenom'] == '' || $post['email'] == '' || $post['tel'] == '' || $post['date'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
            $image = file_get_contents($_FILES['image']['tmp_name']);
			// Insert into MySQL
			$query = $this->query('INSERT INTO etudiant (nom_etudiant, prenom_etudiant, date_de_naissance, um_tel_etudiant, email_etudiant, photo_etudiant, id_niveau) VALUES(:nom_etudiant, :prenom_etudiant, :date_de_naissance, :num_tel_etudiant, :email_etudiant, :photo_etudiant, :id_niveau)');
			$this->bind(':nom_etudiant',$post['nom']);
			$this->bind(':prenom_etudiant', $post['prenom']);
			$this->bind(':date_de_naissance', $post['date']);
			$this->bind(':num_tel_etudiant', $post['tel']);
			$this->bind(':email_etudiant', $post['email']);
			$this->bind(':photo_etudiant', $image);
			$this->bind(':id_niveau',  $post['niveau']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'etudiants/afficher');
			}
		}
		return;
	}



    public function afficher(){
        $this->query('SELECT * FROM etudiant');
		$rows = $this->resultSet();
		return $rows;
	}
	
    public function modifier(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['submit'])){
			if($post['nom'] == '' || $post['prenom'] == '' || $post['email'] == '' || $post['tel'] == '' || $post['date'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
                
				// update into MySQL
				$query = $this->query('UPDATE etudiant SET nom_etudiant = :nom_etudiant, 
				prenom_etudiant = :prenom_etudiant, 
				date_de_naissance = :date_de_naissance, 
				um_tel_etudiant = :num_tel_etudiant,
				email_etudiant = :email_etudiant,
                photo_etudiant = :photo_etudiant,
				id_niveau = :id_niveau
				WHERE id_etudiant = :id');
				$this->bind(':id', $_POST['id']);
				$this->bind(':nom_etudiant',$post['nom']);
				$this->bind(':prenom_etudiant', $post['prenom']);
				$this->bind(':date_de_naissance', $post['date']);
				$this->bind(':num_tel_etudiant', $post['tel']);
				$this->bind(':email_etudiant', $post['email']);
				$this->bind(':photo_etudiant',  $post['photo']);
				$this->bind(':id_niveau',  $post['niveau']);
				$this->execute();
				if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'etudiants/afficher');
				}

			}
		
		return;
	} 

		
}






