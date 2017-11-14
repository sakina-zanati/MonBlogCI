<?php
class Commentaire extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
	}
	
	// Renvoie la liste des commentaires associés à un billet
	public function getCommentaires($idBillet)
	{
	
		$req = "select COM_ID as id, COM_DATE as date,COM_AUTEUR as auteur, COM_CONTENU as contenu from T_COMMENTAIRE where BIL_ID=?";
		$rs = $this->db->query($req, array ($idBillet));
		$commentaires = $rs->result_array();
		return $commentaires;
		
	
    }
    
    
    //ajoute un commentaire
    public function ajoutCommentaire($idBillet,$pseudo, $message)
    {
    $req = "insert into t_commentaire(COM_DATE, COM_AUTEUR, COM_CONTENU, BIL_ID)
			VALUES (now(), '$pseudo', '$message', '$idBillet') " ;
    return $this->db->simple_query($req);
    }
}