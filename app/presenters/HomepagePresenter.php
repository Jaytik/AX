<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
        private $db;
        private $filtrPlatControlFactory;
        private $vypisDatControlFactory;
        public function __construct(\Nette\Database\Context $db, \App\Components\FiltrPlat\FiltrPlatControlFactory $filtrPlatControlFactory, \App\Components\VypisDat\VypisDatControlFactory $vypisDatControlFactory) {
            $this->db = $db;
            $this->filtrPlatControlFactory = $filtrPlatControlFactory;
            $this->vypisDatControlFactory = $vypisDatControlFactory;
            parent::__construct();
        }
    
	public function renderDefault()
	{
		
                $this->template->anyVariable = 'any value';
                $selection = $this->db->table('tabulka');
                //dump($selection);
                $this->template->selection = $selection;
                
	}
        public function renderDetail($id)
	{
		//dump($id);
                $this->template->anyVariable = 'any value';
                $selection = $this->db->table('tabulka');
                    $uzivatel = $selection->get($id);
                    //dump($id);
                    if($uzivatel == NULL)
                        {
                        $this->redirect("Homepage:Detail",array("id" => '1'));
                               
                        }
                         $this->template->uzivatel = $uzivatel;
                //dump($selection);
                $this->template->selection = $selection;
                
	}
        public function renderSave(){
            return $this->filtrPlat;
        }
        public function renderSelForm(){
            //return $this->vypisDat;
            $control = $this->getComponent('vypisDat');
            //dump ($control);
        }
        protected function createComponentFiltrPlat() {
            return $this->filtrPlatControlFactory->create();
            
            
            
        }
        
        protected function createComponentVypisDat() {
            return $this->vypisDatControlFactory->create();
        }
        

}
