<?php

	class User extends Table

	{

		private $id;
		private $id_avatar;
		private $pseudo;
		private $prenom;
		private $nom;
		private $password;
		private $email;
		private $description;
		private $date_naissance;
		private $date_inscription;

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

		public function get_pseudo()
		{
			return $this->pseudo;
		}

		public function set_pseudo($pseudo)
		{
			$this->pseudo=$pseudo;
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
		






	}




?>