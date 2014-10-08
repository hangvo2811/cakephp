<?php
App::uses('AppController', 'Controller');
/**
 * BusinessTests Controller
 *
 * @property BusinessTest $BusinessTest
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 * @property SessionComponent $Session
 */
class BusinessTestsController extends AppController {

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
	public $components = array('Paginator', 'RequestHandler', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->BusinessTest->recursive = 0;
		$this->set('businessTests', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BusinessTest->exists($id)) {
			throw new NotFoundException(__('Invalid business test'));
		}
		$options = array('conditions' => array('BusinessTest.' . $this->BusinessTest->primaryKey => $id));
		$this->set('businessTest', $this->BusinessTest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BusinessTest->create();
			if ($this->BusinessTest->save($this->request->data)) {
				$this->Session->setFlash(__('The business test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business test could not be saved. Please, try again.'));
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
		if (!$this->BusinessTest->exists($id)) {
			throw new NotFoundException(__('Invalid business test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BusinessTest->save($this->request->data)) {
				$this->Session->setFlash(__('The business test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BusinessTest.' . $this->BusinessTest->primaryKey => $id));
			$this->request->data = $this->BusinessTest->find('first', $options);
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
		$this->BusinessTest->id = $id;
		if (!$this->BusinessTest->exists()) {
			throw new NotFoundException(__('Invalid business test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BusinessTest->delete()) {
			$this->Session->setFlash(__('The business test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The business test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * bussiness_test_index method
 *
 * @return void
 */
	public function bussiness_test_index() {
		$this->BusinessTest->recursive = 0;
		$this->set('businessTests', $this->Paginator->paginate());
	}

/**
 * bussiness_test_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_view($id = null) {
		if (!$this->BusinessTest->exists($id)) {
			throw new NotFoundException(__('Invalid business test'));
		}
		$options = array('conditions' => array('BusinessTest.' . $this->BusinessTest->primaryKey => $id));
		$this->set('businessTest', $this->BusinessTest->find('first', $options));
	}

/**
 * bussiness_test_add method
 *
 * @return void
 */
	public function bussiness_test_add() {
		if ($this->request->is('post')) {
			$this->BusinessTest->create();
			if ($this->BusinessTest->save($this->request->data)) {
				$this->Session->setFlash(__('The business test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business test could not be saved. Please, try again.'));
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
		if (!$this->BusinessTest->exists($id)) {
			throw new NotFoundException(__('Invalid business test'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BusinessTest->save($this->request->data)) {
				$this->Session->setFlash(__('The business test has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business test could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BusinessTest.' . $this->BusinessTest->primaryKey => $id));
			$this->request->data = $this->BusinessTest->find('first', $options);
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
		$this->BusinessTest->id = $id;
		if (!$this->BusinessTest->exists()) {
			throw new NotFoundException(__('Invalid business test'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BusinessTest->delete()) {
			$this->Session->setFlash(__('The business test has been deleted.'));
		} else {
			$this->Session->setFlash(__('The business test could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
