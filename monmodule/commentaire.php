<?php


/***
**/
 
class Commentaire extends ObjectModel
  {
	  public $id_avis;
	  public $id_titre;
	  public $id_contenu ;
	  public $date_ajout;
	  public $date_update;
	  
	  public static $definition = array(
		'table' => 'helperlist',
		'primary' => 'id_avis',
		'multilang' => false,
		'fields' => array(
			'id_avis' => array('type'=> self::TYPE_INT),
			'id_titre' => array('type' => self::TYPE_STRING, 'required'=>true),
			'id_contenu' =>	array('type' => self::TYPE_STRING, 'validate' => 'isMessage', 'size' => 65535, 'required' => true),
			'date_ajout' =>	array('type' => self::TYPE_DATE , 'validate'=>'isDate'),
			'date_update' => array('type' => self::TYPE_DATE, 'validate'=>'isDate'),
		),
	);

	
	
  }
