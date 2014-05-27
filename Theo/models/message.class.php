<?php
	/**
	* 	
	*/
	class Message extends Table{
		private $id;
		private $id_sender;
		private $id_receiver;
		private $date;
		private $id_groupe;
		private $content;
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

		public function get_id_sender() {
			return $this->id_sender;
		}

		public function get_id_receiver() {
			return $this->id_receiver;
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

		public function set_id_sender($id_sender) {
			$this->id_sender = $id_sender;
		}

		public function set_id_receiver($id_receiver) {
			$this->id_receiver = $id_receiver;
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