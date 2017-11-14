<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Billet extends CI_Model {
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	/**
	 * Renvoie la liste des billets du blog
	 */
	function getBillets() {
		$req = "select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, BIL_CONTENU as contenu from t_billet";
		$rs = $this->db->query($req);
		$lesBillets = $rs->result_array();
		return $lesBillets;
	}
	
	/**
	 * Retourne les informations pour un billet
	 *
	 * @param $idBillet 
	 * @return l'id, le titre et le contenu du billet sous la forme d'un tableau associatif
	 */
	public function getBillet($idBillet){
		$req = "select BIL_ID as id, BIL_DATE as date, BIL_TITRE as titre, 
             BIL_CONTENU as contenu from T_BILLET where BIL_ID=?";
		$rs = $this->db->query($req, array ($idBillet));
		$billet = $rs->first_row('array');
		return $billet;
	}
	
}
