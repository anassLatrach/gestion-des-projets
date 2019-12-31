<?php
class EncadrantModel extends Model{
    public function ajouter(){
        
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['nom'] == '' || $post['prenom'] == '' || $post['email'] == '' || $post['tel'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// Insert into MySQL
			$query = $this->query('INSERT INTO encadrant (nom_encadrant, prenom_encadrant, um_tel_encadrant, email_encadrant) VALUES(:nom_encadrant, :prenom_encadrant, :num_tel_encadrant, :email_encadrant)');
			$this->bind(':nom_encadrant',$post['nom']);
			$this->bind(':prenom_encadrant', $post['prenom']);
			$this->bind(':num_tel_encadrant', $post['tel']);
			$this->bind(':email_encadrant', $post['email']);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'encadrants/afficher');
			}
		}
		return;
  
    }
        public function afficher(){
        $this->query('SELECT * FROM encadrant');
		$rows = $this->resultSet();
		return $rows;
  
  
	}
	
	public function supprimer(){
		$this->query('DELETE FROM encadrant WHERE id_encadrant= :id');
        $this->bind(':id', $_POST['id']);
        $this->execute();
		return;
	}
    
    public function modifier(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if(isset($post['submit'])){
			if($post['nom'] == '' || $post['prenom'] == '' || $post['email'] == '' || $post['tel'] == ''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			// update into MySQL
			$query = $this->query('UPDATE encadrant 
			SET nom_encadrant = :nom_encadrant, 
				prenom_encadrant = :prenom_encadrant, 
				um_tel_encadrant = :num_tel_encadrant,  
				email_encadrant = :email_encadrant 
			WHERE id_encadrant = :id_encadrant ');
			$this->bind(':id_encadrant', $_POST['id']);
			$this->bind(':nom_encadrant',$post['nom']);
			$this->bind(':prenom_encadrant', $post['prenom']);
			$this->bind(':num_tel_encadrant', $post['tel']);
			$this->bind(':email_encadrant', $post['email']);
			$this->execute();
            if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'encadrants/afficher');
			}
		}
		return;
	}


}