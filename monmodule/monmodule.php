<?php

require_once('commentaire.php');
class MonModule extends Module
{
		public function install()
	{
		return parent::install() &&
		$this->registerHook('displayProductTabContent');
	
	}
	
	public function hookDisplayProductTabContent
	($params)
	{
		return '<b>Display me on product page</b>';
	}
	

		
	
		public function __construct()
	{
		$this->name = 'monmodule';
		$this->tab = 'front_office_features';
		$this->version = '0.1';
		$this->author = 'Danneels Sophie';
		$this->displayName = 'Essaie module';
		$this->description = 'A description';
		$this->bootstrap=true; /* form*/
		parent::__construct();
		
	}
	
	
	
	
	
	
	
	public function assignConfiguration()
	{
		
		$id_title = Configuration::get('MYMOD_TITRE');
		$id_contenu = Configuration::get('MYMOD_COMMENTS');
		$this->context->smarty->assign('enable_title',$id_title);
		$this->context->smarty->assign('enable_text',$id_contenu);
		
		

	}
	
	
	
	public function processConfiguration()
	{
		if(Tools::isSubmit('valid')){
			
			$id_title= Tools::getValue('title');
			$id_contenu = Tools::getValue('content');
			
			
		/**
			$insert = array (
				'id_titre' => pSQL($id_title),
				'id_contenu' => pSQL($id_contenu),
				'date_ajout' => date('Y-m-d H:i:s'),
				'date_update' => date('Y-m-d H:i:s'),
			);
			Db::getInstance()->insert('helperlist',$insert);
			**/
			$Commentaire = new Commentaire();
			$Commentaire -> id_titre  = $id_title;
			$Commentaire -> id_contenu  =$id_contenu;
			$Commentaire -> date_ajout = date('Y-m-d H:i:s');
			$Commentaire -> date_update =date('Y-m-d H:i:s');
			$Commentaire -> add();
			Configuration::updateValue('MYMOD_TITRE',$id_title);
		    Configuration::updateValue('MYMOD_COMMENTS',$id_contenu);
			$this->context->smarty->assign('confirmation','ok');
		
		
	
		
		}
	}
	
	public function getContent()
	{-
		$this->processConfiguration();
		$this->assignConfiguration();
		return $this->display(__FILE__, 'getContent.tpl');

	}
	}


