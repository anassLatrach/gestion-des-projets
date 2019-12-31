<?php
class IndexModel extends Model{
		public function Index(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM admin WHERE email_admin = :email_admin AND pswd_admin = :pswd_admin');
			$this->bind(':email_admin', $post['email']);
			$this->bind(':pswd_admin', $password);
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id_admin"	=> $row['id'],
					"nom_admin"	=> $row['name'],
					"email_admin"	=> $row['email']
				);
				header('Location: '.ROOT_URL);
			} else {
				Messages::setMsg($post['email'], 'error');
			}
		}
		return;
	}
    
}