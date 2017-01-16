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
		
		return $this->display(__FILE__, 'getContent.tpl');

	}
	}


