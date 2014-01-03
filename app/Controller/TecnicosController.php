<?php
App::uses('AppController', 'Controller');
/**
 * Tecnicos Controller
 *
 * @property Tecnico $Tecnico
 * @property PaginatorComponent $Paginator
 */
class TecnicosController extends AppController {

	public function beforeFilter()
	{
		$this->Auth->allow('add', 'logout'); // Permitir Técnicos se registrarem
	}

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tecnico->recursive = 0;
		$this->set('tecnicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tecnico->exists($id)) {
			throw new NotFoundException(__('Invalid tecnico'));
		}
		$options = array('conditions' => array('Tecnico.' . $this->Tecnico->primaryKey => $id));
		$this->set('tecnico', $this->Tecnico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tecnico->create();
			if ($this->Tecnico->save($this->request->data)) {
				$this->Session->setFlash(__('The tecnico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tecnico could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tecnico->exists($id)) {
			throw new NotFoundException(__('Invalid tecnico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tecnico->save($this->request->data)) {
				$this->Session->setFlash(__('The tecnico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tecnico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tecnico.' . $this->Tecnico->primaryKey => $id));
			$this->request->data = $this->Tecnico->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tecnico->id = $id;
		if (!$this->Tecnico->exists()) {
			throw new NotFoundException(__('Invalid tecnico'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tecnico->delete()) {
			$this->Session->setFlash(__('The tecnico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tecnico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login()
	{
		if ($this->request->is('post')) {
			$tecnico = $this->Tecnico->find('first', array(
					'conditions'=>array(
						'login'=>$this->request->data['Tecnico']['login'],
						'senha'=>AuthComponent::password($this->request->data['Tecnico']['senha'])
					)
				));
			if ($this->Auth->login($tecnico['Tecnico'])) {
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(_('Login ou senha errada.'));
			}
		}
		
	}

	public function logout()
	{
		$this->redirect($this->Auth->logout());
	}

}
