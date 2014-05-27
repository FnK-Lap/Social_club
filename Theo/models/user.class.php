<?php

	class User extends Table

	{

		private $id;
		private $id_avatar;
		private $prenom;
		private $nom;
		private $password;
		private $email;
		private $description;
		private $date_naissance;
		private $date_inscription;

		private $statuts;
		private $avatar;

		public function __construct()
		{
			$this->table_name = 'users';
			parent::__construct();
		}

		public function get_id()
		{
			return $this->id;
		}

		public function set_id($id)
		{
			$this->id = $id;
		}

		public function get_id_avatar()
		{
			return $this->id_avatar;
		}

		public function set_id_avatar($id_avatar)
		{
			$this->id_avatar=$id_avatar;
		}

		public function get_prenom()
		{
			return $this->prenom;
		}

		public function set_prenom($prenom)
		{
			$this->prenom=$prenom;
		}

		public function get_nom()
		{
			return $this->nom;
		}

		public function set_nom($nom)
		{
			$this->nom=$nom;
		}

		public function get_password()
		{
			return $this->password;
		}

		public function set_password($password)
		{
			$this->password=$password;
		}

		public function get_email()
		{
			return $this->email;
		}

		public function set_email($email)
		{
			$this->email=$email;
		}

		public function get_description()
		{
			return $this->description;
		}

		public function set_description($description)
		{
			$this->description=$description;
		}

		public function get_date_naissance()
		{
			return $this->date_naissance;
		}

		public function set_date_naissance($date_naissance)
		{
			$this->date_naissance=$date_naissance;
		}

		public function get_date_inscription()
		{
			return $this->date_inscription;
		}

		public function set_date_inscription($date_inscription)
		{
			$this->date_inscription=$date_inscription;
		}

		public function get_statuts()
	    {
	        return $this->statuts;
	    }

	    public function get_avatar()
	    {
	    	return $this->avatar;
	    }

		public function hydrate($key = null, $profondeur = 0)
		{
			parent::hydrate();
			
			$Statuts = new Statut();
			$Statuts->set_id_user($this->id);
			$nbStatut = $Statuts->hydrate('id_user');
			if ($nbStatut != false) {
				$nbStatut = count($nbStatut);
			}else{
				$nbStatut = 0;
			}
			for ($i=0; $i < $nbStatut; $i++) { 
				$this->statuts[$i] = new Statut();
				$this->statuts[$i]->set_id_user($this->id);
				$this->statuts[$i]->hydrate('id_user', $i);
			}

			$this->avatar = new Photo();
			$this->avatar->set_id($this->id_avatar);
			$this->avatar->hydrate();

		}


	}








?>