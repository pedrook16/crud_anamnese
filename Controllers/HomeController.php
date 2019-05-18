<?php
namespace Controllers;

use \Core\Controller;
use \Models\Exemplo;

class HomeController extends Controller {

	public function index() {
		$exemplo = new Exemplo();
		$this->arrayInfo['list'] = $exemplo->getAll(true);
		$this->loadTemplate('home', $this->arrayInfo);
    }
    public function add() {
		$this->arrayInfo['errorItems'] = array();		
		$this->loadTemplate('add', $this->arrayInfo);
	}
	public function add_action() {
	
		if(!empty($_POST['anamnese'])) {
			$anamnese = $_POST['anamnese'];
			// O padrão no banco é sempre false
			$response = $_POST['response'] == 'true' ? true : '' ;
						
			
			$exemplo = new Exemplo();
			$exemplo->add($anamnese, $response);			
			header("Location: ".BASE_URL);
			exit;
		}
    }
    public function edit($id) {		
		if(!empty($id)) {  
			$exemplo = new Exemplo();
			
			if(!empty($_POST['anamnese'])) {
				$anamnese = $_POST['anamnese'];
				$response = $_POST['response'] == 'true' ? true : false ;
				
				$exemplo->update($id, $anamnese, $response);								
			}else{	
				$this->arrayInfo['info'] = $exemplo->get($id);
				$this->loadTemplate('edit', $this->arrayInfo);
				exit;
			}			
		}			
		header("Location: ".BASE_URL);
	}

	public function view($id) {
		if(!empty($id)) {            
            $exemplo = new Exemplo();
			$this->arrayInfo['info'] = $exemplo->get($id);
			$this->loadTemplate('view', $this->arrayInfo);
		}		
	}
    public function del($id) {
		if(!empty($id)) {            
            $exemplo = new Exemplo();  
            $exemplo->del($id);
		}
		header("Location: ".BASE_URL);
		exit;
	}
}
