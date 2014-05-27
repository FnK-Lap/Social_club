<?php

// Abstract permet de ne pas pouvoir instancier la class Table
abstract class Table
{
	// protected comme le private mais les class fille peuvent y acceder
	protected $primary_key;
	protected $table_name;
	protected $fields;

	public function __construct()
	{
		if (!empty($this->table_name)) {
			$this->detectFields();
		}else{
			die('Nom de table manquant');
		}
	}

	private function detectFields()
	{
		$data = dbFetchAllAssoc("SHOW COLUMNS FROM `".$this->table_name."`");

		foreach ($data as $field) {
			$this->fields[$field['Field']] = $field;

			if ($field['Key'] == 'PRI') {
				$this->primary_key = $field['Field'];
			}
		}
	}

	/*
	**	Fonction generique de delete d'une ligne en BDD
	*/
	public function delete()
	{
		if (empty($this->primary_key) || empty($this->table_name))
			die('cannot uset class Table without tablename and primary key setted');

		$pk_getter = "get_".$this->primary_key;

		$query = "delete from `".$this->table_name."`".
		"where `".$this->primary_key."`='".$this->$pk_getter()."'";
	
		dbQuery($query);
	}

	

	public function save()
	{

		// Construction du getter pour la primary_key
		$pk_getter = 'get_'.$this->primary_key;
		$nb_fields = count($this->fields);

		if ($this->$pk_getter() != null) {	// Une cle primaire est set
			$query = "UPDATE `".$this->table_name."` SET ";
				$i = 0;
				foreach ($this->fields as $field) {
					$getter = 'get_'.$field['Field'];

					$query .= $field['Field']."='".$this->$getter()."'";
					if ($i < $nb_fields-1) {
						$query .= ', ';
					}
					$i ++;
				}
			$query .= " WHERE ".$this->primary_key." = '".$this->$pk_getter()."'";
			$query .= ";";
			dbQuery($query);
		}else{	// Aucune cle primaire n'est set
			$query = "INSERT INTO `".$this->table_name."` (";
				$i = 0;	// Sert pour mettre les virgules
				foreach ($this->fields as $field) {
					$query .= $field['Field'];

					if ($i < $nb_fields-1) {
						$query .= ', ';
					}
					$i ++;
				}
			$query .= ") VALUES (";
				$i = 0;
				foreach ($this->fields as $field) {
					// On creer un getter pour recuperer chaque champs
					$getter = 'get_'.$field['Field'];

					$query .= "'".$this->$getter()."'";

					if ($i < $nb_fields-1) {
						$query .= ', ';
					}
					$i ++;
				}
			$query .= ");";
			dbQuery($query);
			$last_id = last_insert_id();
			$pk_setter = "set_".$this->primary_key;
			$this->$pk_setter($last_id);
		}
	}

	public function hydrate($key = null, $profondeur = 0)
	{
		global $link;
		if ($key == null) {
			$pk_getter = 'get_'.$this->primary_key;
		}else{
			$pk_getter = 'get_'.$key;
		}
		
		$pk_value = $this->$pk_getter();

		if (empty($pk_value)) {
			die(get_called_class().': primary key manquant');
		}

		$date = false;
		foreach ($this->fields as $field) {
			if ($field['Field'] == 'date') {
				$date = true;
			}
		}

		if ($key == null) {
			if ($date == true) {
				$query = "SELECT * FROM `".$this->table_name."` WHERE `".$this->primary_key."` = ".intval($pk_value)." ORDER BY `".$this->table_name."`.`date`";
			}else{
				$query = "SELECT * FROM `".$this->table_name."` WHERE `".$this->primary_key."` = ".intval($pk_value);
			}
		}else{
			if ($date == true) {
				$query = "SELECT * FROM `".$this->table_name."` WHERE `".$key."` = '".mysqli_real_escape_string($link, $pk_value)."' ORDER BY `".$this->table_name."`.`date`";
			}else{
				$query = "SELECT * FROM `".$this->table_name."` WHERE `".$key."` = '".mysqli_real_escape_string($link, $pk_value)."'";
			}
		}

			
			$data = dbFetchAllAssoc($query);

			foreach ($this->fields as $field) {
				$setter = 'set_'.$field['Field'];
				$fieldName = $field['Field'];
				$this->$setter($data[$profondeur][$fieldName]);
			}

		return $data;
		
	}
}

?>