<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $components = array(
		'DebugKit.Toolbar' => array(
		    'cache' => array('engine' => 'Apc')),
		'Session',
		'Auth' => array(
			'loginRedirect' => array('controller' => 'times', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'tecnicos', 'action' => 'login'),
			'loginAction' => array(
	            'controller' => 'tecnicos',
	            'action' => 'login',
	            'plugin' => ''
        	),
        	'authError' => 'Você não pode acessar esta área.',
			'authenticate' => array(
	            'Form' => array(
	            	'userModel' => 'Tecnico',
	                'fields' => array('username' => 'login', 'password'=>'senha')
	            )
	        ),
	        'authorize' => array('Controller') // Modificado aqui 
		)
	);

	public function beforeFilter($value='')
	{
		$this->Auth->allow('index', 'view');
	}

    public function isAuthorized($tecnico)
    {
    	if ($this->action == 'index' || $this->action == 'view') {
    		return true;
    	}else{
    		return false;
    	}
    }


}





