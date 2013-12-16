<?php 
	/**
	* Controller de Times
	*/
	class TimesController extends AppController
	{
		public $name = "Times";
		public $helpers = array('Html','Form');
	
		public function index()
		{
			$this->set('times', $this->Time->find('all'));
		}

		public function view($id = null)
		{
			$this->Time->id = $id;
			$this->set('time', $this->Time->read());
		}
                
        public function add() {
            if ($this->request->is('post')) {
                if ($this->Time->save($this->request->data)) {
                    $this->Session->setFlash('O time foi cadastrado com sucesso!');
                    $this->redirect(array('action' => 'index'));
                }
            }
        }

        function edit($id = null) {
			$this->Time->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Time->read();
			} else {
				if ($this->Time->save($this->request->data)) {
					$this->Session->setFlash('O Time foi atualizado.');
					$this->redirect(array('action' => 'index'));
				}
			}
		}

		function delete($id) {
		    if (!$this->request->is('post')) {
		        throw new MethodNotAllowedException();
		    }
		    if ($this->Time->delete($id)) {
		        $this->Session->setFlash('O Time com id: ' . $id . ' foi deletado.');
		        $this->redirect(array('action' => 'index'));
		    }
		}
		
	}


