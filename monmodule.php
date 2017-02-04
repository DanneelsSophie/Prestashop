<?php
class MonModule extends Module
{
		public function __construct()
	{
		$this->name = 'monmodule';
		$this->tab = 'front_office_features';
		$this->version = '0.1';
		$this->author = 'Danneels Sophie';
		$this->displayName = 'Essaie module';
		$this->description = 'A description';
		parent::__construct();
		
	}
	
	public function getContent()
	{
		$this->processConfiguration();
		return $this->display(__FILE__, 'getContent.tpl');

	}
	
	
	
	}
public function processConfiguration()
	{
		if(Tools::isSubmit('valid')){
			
			$enable_title = Tools::getValue('title');
			$enable_text = Tools::getValue('text');
	
			
			$insert = array (
					'titre' => pSQL ($enable_title),
					'contenu' => pSQL($enable_text),
					'dateajout' => date('Y-m-d H:i:s'),
					'dateupdate' => date('Y-m-d H:i:s'),
				);
				Db::getInstance()->insert('ps_helperlist',$insert);
				
		
			$this->context->smarty->assign('confirmation','ok');
		}
	}


