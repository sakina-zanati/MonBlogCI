<?php
class Model_name extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}
	
	public function getLesLignes()
	{
	
		$req = "select champ1 as nom1, champ2 as nom2 from table";
		$rs = $this->db->query($req);
		$lesLignes = $rs->result_array();
		return $lesLignes;
	
    }
}