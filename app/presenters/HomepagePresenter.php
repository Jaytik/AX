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
        public function __construct(Nette\Database\Context $db, \App\Components\FiltrPlat\FiltrPlatControlFactory $filtrPlatControlFactory) {
            $this->db = $db;
            $this->filtrPlatControlFactory = $filtrPlatControlFactory;
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
        protected function createComponentFiltrPlat() {
            return $this->filtrPlatControlFactory->create();
            
            
            
        }
        

}
