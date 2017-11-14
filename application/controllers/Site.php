<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller {
	
	
	/**
	 * Contrôleur principal du front
	 * Permet l'affichage des billets et des commentaires
	 */
	
	public function index()
	{
		$data['chemin']= base_url('application/views');
		$data['url'] = site_url() ;
		$data['titre']= 'Mon nouveau blog';
		$data['contenu'] = 'Cela manque de style pour le moment, mais ça viendra !';
		$this->load->view('vue_accueil', $data);
		
	}
	
	public function lesbillets() {
		$this->load->model('billet');
		//	On lance une requête
		$data['lesBillets'] = $this->billet->getBillets();
		
		$data['titre']= 'Les billets du blog';
		$data['chemin']= base_url('application/views');
		//	On inclut une vue
		$this->load->view('vue_billet', $data);
		}
		
		public function lebillet($idBillet) {
			$this->load->model('billet');
			$this->load->model('commentaire');
			$data['idBillet'] = $idBillet ;
			//	On lance une requête
			$data['billet'] = $this->billet->getBillet($idBillet);
			$data['commentaires'] = $this->commentaire->getCommentaires($idBillet);
			
			$data['titre']= 'Détail billet';
			$data['chemin']= base_url('application/views');
			//	On inclut une vue
			$this->load->view('vue_un_billet', $data);
		}
		
		
		public function ajoutCommentaire($idBillet)
		{
			$this->load->model('commentaire');
			
			$data['result'] = $this->commentaire->ajoutCommentaire($idBillet,'Lulu', 'Un nouveau commentaire');
			
		}
}