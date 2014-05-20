<?php
	/**
	* 	
	*/
	class Token extends Table{
		private $id;
		private $token;
		private $date;

		/*
		**	CONSTRUCTEUR
		*/
		function __construct() {
			$this->table_name = 'tokens';
			parent::__construct();
		}
		/**
		**	GETTER
		**/
		public function get_id() {
			return $this->id;
		}

		public function get_token() {
			return $this->token;
		}

		public function get_date() {
			return $this->date;
		}

		/**
		**	SETTER
		**/

		public function set_id($id) {
			$this->id = $id;
		}

		public function set_token($token) {
			$this->token = $token;
		}

		public function set_date($date) {
			$this->date = $date;
		}
		
	}
?>