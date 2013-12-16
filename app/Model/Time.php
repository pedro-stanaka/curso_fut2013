<?php

	/**
	* Classe Times - Representa o modelo de Times e 
	* se comunica com a tabela `times` do banco de dados
	*/
	class Time extends AppModel
	{
		public $name = "Time";

		public $validate = array(
	        'nome' => array(
	            'rule' => 'notEmpty'
	        ),
	        'fundacao' => array(
	            'rule' => 'notEmpty'
	        ),
	        'titulos' => array(
	        	'rule'=> 'numeric'
        	)
    	);
	}


	

