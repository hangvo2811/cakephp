<?php
App::uses('AppController', 'Controller');
/**
 * AttachFiles Controller
 *
 * @property AttachFile $AttachFile
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 * @property SessionComponent $Session
 */
class AttachFilesController extends AppController {

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
		$this->AttachFile->recursive = 0;
		$this->set('attachFiles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AttachFile->exists($id)) {
			throw new NotFoundException(__('Invalid attach file'));
		}
		$options = array('conditions' => array('AttachFile.' . $this->AttachFile->primaryKey => $id));
		$this->set('attachFile', $this->AttachFile->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AttachFile->create();
			if ($this->AttachFile->save($this->request->data)) {
				$this->Session->setFlash(__('The attach file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attach file could not be saved. Please, try again.'));
			}
		}
		$templateMails = $this->AttachFile->TemplateMail->find('list');
		$this->set(compact('templateMails'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AttachFile->exists($id)) {
			throw new NotFoundException(__('Invalid attach file'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AttachFile->save($this->request->data)) {
				$this->Session->setFlash(__('The attach file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attach file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AttachFile.' . $this->AttachFile->primaryKey => $id));
			$this->request->data = $this->AttachFile->find('first', $options);
		}
		$templateMails = $this->AttachFile->TemplateMail->find('list');
		$this->set(compact('templateMails'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AttachFile->id = $id;
		if (!$this->AttachFile->exists()) {
			throw new NotFoundException(__('Invalid attach file'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AttachFile->delete()) {
			$this->Session->setFlash(__('The attach file has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attach file could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * bussiness_test_index method
 *
 * @return void
 */
	public function bussiness_test_index() {
		$this->AttachFile->recursive = 0;
		$this->set('attachFiles', $this->Paginator->paginate());
	}

/**
 * bussiness_test_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_view($id = null) {
		if (!$this->AttachFile->exists($id)) {
			throw new NotFoundException(__('Invalid attach file'));
		}
		$options = array('conditions' => array('AttachFile.' . $this->AttachFile->primaryKey => $id));
		$this->set('attachFile', $this->AttachFile->find('first', $options));
	}

/**
 * bussiness_test_add method
 *
 * @return void
 */
	public function bussiness_test_add() {
		if ($this->request->is('post')) {
			$this->AttachFile->create();
			if ($this->AttachFile->save($this->request->data)) {
				$this->Session->setFlash(__('The attach file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attach file could not be saved. Please, try again.'));
			}
		}
		$templateMails = $this->AttachFile->TemplateMail->find('list');
		$this->set(compact('templateMails'));
	}

/**
 * bussiness_test_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_edit($id = null) {
		if (!$this->AttachFile->exists($id)) {
			throw new NotFoundException(__('Invalid attach file'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AttachFile->save($this->request->data)) {
				$this->Session->setFlash(__('The attach file has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The attach file could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AttachFile.' . $this->AttachFile->primaryKey => $id));
			$this->request->data = $this->AttachFile->find('first', $options);
		}
		$templateMails = $this->AttachFile->TemplateMail->find('list');
		$this->set(compact('templateMails'));
	}

/**
 * bussiness_test_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_delete($id = null) {
		$this->AttachFile->id = $id;
		if (!$this->AttachFile->exists()) {
			throw new NotFoundException(__('Invalid attach file'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AttachFile->delete()) {
			$this->Session->setFlash(__('The attach file has been deleted.'));
		} else {
			$this->Session->setFlash(__('The attach file could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
