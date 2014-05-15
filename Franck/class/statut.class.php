<?php

class Statut
{
	private $id;
	private $id_user;
	private $date;
	private $content;

	public function __construct()
	{
		$this->table_name = 'statuts';
		parent::__construct();
	}

	/*
	**	Getter
	*/
	public function get_id()
	{
		return $this->id;
	}

	public function get_id_user()
	{
		return $this->id_user;
	}

	public function get_date()
	{
		return $this->date;
	}

	public function get_id()
	{
		return $this->content;
	}

	/*
	**	Setter
	*/
	public function set_id($id)
	{
		$this->id = $id;
	}
	public function set_id_user($id_user)
	{
		$this->id_user = $id_user;
	}
	public function set_date($date)
	{
		$this->date = $date;
	}
	public function set_content($content)
	{
		$this->content = $content;
	}
}

?>