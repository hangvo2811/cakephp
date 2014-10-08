<?php
App::uses('AppController', 'Controller');
/**
 * Tickets Controller
 *
 * @property Ticket $Ticket
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 * @property SessionComponent $Session
 */
class TicketsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler', 'Session', 'Search.Prg');

//    public $components = array('Search.Prg');
    public $presetVars = array(
        array('field' => 'title', 'type' => 'value'),
        array('field' => 'status', 'type' => 'value'),
      );
    
    public function beforeFilter() {
        $this->set('statuses', $this->Ticket->statuses);
        $this->set('categories', $this->Ticket->categories);    
        parent::beforeFilter();
        }
/**
 * index method
 *
 * @return void
 */
//	public function index() {
//		$this->Ticket->recursive = 0;
//		$this->set('tickets', $this->Paginator->paginate());
//	}

 /**       **
 * index method
 *
 * @return void
 */
    public function index() {
        
        $this->Prg->commonProcess();
        $this->paginate = 
            array(
            'limit' => 2,
            'conditions' => $this->Ticket->parseCriteria($this->passedArgs)
            );
        
        //$this->paginate['conditions'] = $this->Ticket->parseCriteria($this->passedArgs);
        $this->set('tickets', $this->paginate());
    }
    
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ticket->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		$options = array('conditions' => array('Ticket.' . $this->Ticket->primaryKey => $id));
		$this->set('ticket', $this->Ticket->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ticket->create();
			if ($this->Ticket->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
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
		if (!$this->Ticket->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ticket->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ticket.' . $this->Ticket->primaryKey => $id));
			$this->request->data = $this->Ticket->find('first', $options);
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
		$this->Ticket->id = $id;
		if (!$this->Ticket->exists()) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ticket->delete()) {
			$this->Session->setFlash(__('The ticket has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ticket could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * bussiness_test_index method
 *
 * @return void
 */
	public function bussiness_test_index() {
		$this->Ticket->recursive = 0;
		$this->set('tickets', $this->Paginator->paginate());
	}

/**
 * bussiness_test_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_view($id = null) {
		if (!$this->Ticket->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		$options = array('conditions' => array('Ticket.' . $this->Ticket->primaryKey => $id));
		$this->set('ticket', $this->Ticket->find('first', $options));
	}

/**
 * bussiness_test_add method
 *
 * @return void
 */
	public function bussiness_test_add() {
		if ($this->request->is('post')) {
			$this->Ticket->create();
			if ($this->Ticket->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
			}
		}
	}

/**
 * bussiness_test_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_edit($id = null) {
		if (!$this->Ticket->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ticket->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ticket.' . $this->Ticket->primaryKey => $id));
			$this->request->data = $this->Ticket->find('first', $options);
		}
	}

/**
 * bussiness_test_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_delete($id = null) {
		$this->Ticket->id = $id;
		if (!$this->Ticket->exists()) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Ticket->delete()) {
			$this->Session->setFlash(__('The ticket has been deleted.'));
		} else {
			$this->Session->setFlash(__('The ticket could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
