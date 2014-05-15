<?php
	/**
	* 	
	*/
	class Message {
		
		public $id;
		public $id_user;
		public $date;
		public $id_groupe;
		public $content;
		/*
		**	CONSTRUCTEUR
		*/
		function __construct() {
			$this->table_name = 'messages';
			parent::__construct();
		}
		/**
		**	GETTER
		**/
		public function get_id() {
			return $this->id;
		}

		public function get_id_user() {
			return $this->id_user;
		}

		public function get_date() {
			return $this->date;
		}

		public function get_id_groupe() {
			return $this->id_groupe;
		}

		public function get_content() {
			return $this->content;
		}

		/**
		**	SETTER
		**/

		public function set_id($id) {
			$this->id = $id;
		}

		public function set_id_user($id_user) {
			$this->id_user = $id_user;
		}

		public function set_date($date) {
			$this->date = $date;
		}

		public function set_id_groupe($id_groupe) {
			$this->id_groupe = $id_groupe;
		}

		public function set_content($content) {
			$this->content = $content;
		}

	}
?>