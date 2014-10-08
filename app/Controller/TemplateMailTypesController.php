<?php
App::uses('AppController', 'Controller');
/**
 * TemplateMailTypes Controller
 *
 * @property TemplateMailType $TemplateMailType
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 * @property SessionComponent $Session
 */
class TemplateMailTypesController extends AppController {

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
		$this->TemplateMailType->recursive = 0;
		$this->set('templateMailTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TemplateMailType->exists($id)) {
			throw new NotFoundException(__('Invalid template mail type'));
		}
		$options = array('conditions' => array('TemplateMailType.' . $this->TemplateMailType->primaryKey => $id));
		$this->set('templateMailType', $this->TemplateMailType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TemplateMailType->create();
			if ($this->TemplateMailType->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail type could not be saved. Please, try again.'));
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
		if (!$this->TemplateMailType->exists($id)) {
			throw new NotFoundException(__('Invalid template mail type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TemplateMailType->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TemplateMailType.' . $this->TemplateMailType->primaryKey => $id));
			$this->request->data = $this->TemplateMailType->find('first', $options);
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
		$this->TemplateMailType->id = $id;
		if (!$this->TemplateMailType->exists()) {
			throw new NotFoundException(__('Invalid template mail type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TemplateMailType->delete()) {
			$this->Session->setFlash(__('The template mail type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The template mail type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * bussiness_test_index method
 *
 * @return void
 */
	public function bussiness_test_index() {
		$this->TemplateMailType->recursive = 0;
		$this->set('templateMailTypes', $this->Paginator->paginate());
	}

/**
 * bussiness_test_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_view($id = null) {
		if (!$this->TemplateMailType->exists($id)) {
			throw new NotFoundException(__('Invalid template mail type'));
		}
		$options = array('conditions' => array('TemplateMailType.' . $this->TemplateMailType->primaryKey => $id));
		$this->set('templateMailType', $this->TemplateMailType->find('first', $options));
	}

/**
 * bussiness_test_add method
 *
 * @return void
 */
	public function bussiness_test_add() {
		if ($this->request->is('post')) {
			$this->TemplateMailType->create();
			if ($this->TemplateMailType->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail type could not be saved. Please, try again.'));
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
		if (!$this->TemplateMailType->exists($id)) {
			throw new NotFoundException(__('Invalid template mail type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TemplateMailType->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TemplateMailType.' . $this->TemplateMailType->primaryKey => $id));
			$this->request->data = $this->TemplateMailType->find('first', $options);
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
		$this->TemplateMailType->id = $id;
		if (!$this->TemplateMailType->exists()) {
			throw new NotFoundException(__('Invalid template mail type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TemplateMailType->delete()) {
			$this->Session->setFlash(__('The template mail type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The template mail type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
