<?php

	class Photo

	{

		private $id;
		private $id_user;
		private $photo;
		private $description;
		private $date_upload;

		public function __construct()
		{
			$this->table_name = 'photos';
			parent::__construct();
		}

		public function get_id()
		{
			return $this->id;
		}

		public function set_id($id)
		{
			$this->id=$id;
		}

		public function get_id_user()
		{
			return $this->id_user;
		}

		public function set_id_user($id_user)
		{
			$this->id_user=$id_user;
		}

		public function get_photo()
		{
			return $this->photo;
		}

		public function set_photo($photo)
		{
			$this->photo=$photo;
		}

		public function get_description()
		{
			return $this->description;
		}

		public function set_description($description)
		{
			$this->description=$description;
		}

		public function get_date_upload()
		{
			return $this->date_upload;
		}

		public function set_date_upload($date_upload)
		{
			$this->date_upload=$date_upload;
		}


	}



?>