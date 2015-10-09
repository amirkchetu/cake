<?php
/**/
namespace App\Controller;
use App\Controller\AppController;

class DomainsController extends AppController{
	/* Sets the Theme Name */
	public function beforeRender(\Cake\Event\Event $event){
        $this->viewBuilder()->theme('Charisma');
    }
    
	public function index(){
		$domains = $this->Domains->find('all');
		//$count = $domains->count();
        $domains = $domains->toArray();
		$this->set('domains', $domains);
    }
	
	

}