<?php
App::uses('AppController', 'Controller');
/**
 * TemplateMails Controller
 *
 * @property TemplateMail $TemplateMail
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 * @property SessionComponent $Session
 */
class TemplateMailsController extends AppController {

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

public $presetVars = array(
        array('field' => 'subject', 'type' => 'value'),
        array('field' => 'name', 'type' => 'value'),
        array('field' => 'body', 'type' => 'value'),
        array('field' => 'template_mail_type_id', 'type' => 'value'),
      );
/**
 * index method
 *
 * @return void
 */
	public function index() {
        // load template mail type
        $templateMailTypes = $this->TemplateMail->TemplateMailType->find('list');
		$this->set(compact('templateMailTypes'));
        
		$this->TemplateMail->recursive = 0;
        $this->Prg->commonProcess();
//        $conditions = array('section_id' => 52);
//        $this->Paginator->settings = array(
//            'conditions' => $conditions,
//            'limit' => 10,
//            'order' => array('TemplateMail.id' => 'desc')
//        );
        $this->Paginator->settings = 
            array(
            'limit' => 2,
            'conditions' => $this->TemplateMail->parseCriteria($this->passedArgs)
            );
		$this->set('templateMails', $this->Paginator->paginate());
        
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->TemplateMail->exists($id)) {
			throw new NotFoundException(__('Invalid template mail'));
		}
		$options = array('conditions' => array('TemplateMail.' . $this->TemplateMail->primaryKey => $id));
		$this->set('templateMail', $this->TemplateMail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->TemplateMail->create();
			if ($this->TemplateMail->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail could not be saved. Please, try again.'));
			}
		}
		$templateMailTypes = $this->TemplateMail->TemplateMailType->find('list');
		$this->set(compact('templateMailTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->TemplateMail->exists($id)) {
			throw new NotFoundException(__('Invalid template mail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TemplateMail->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TemplateMail.' . $this->TemplateMail->primaryKey => $id));
			$this->request->data = $this->TemplateMail->find('first', $options);
		}
		$templateMailTypes = $this->TemplateMail->TemplateMailType->find('list');
		$this->set(compact('templateMailTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->TemplateMail->id = $id;
		if (!$this->TemplateMail->exists()) {
			throw new NotFoundException(__('Invalid template mail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TemplateMail->delete()) {
			$this->Session->setFlash(__('The template mail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The template mail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * bussiness_test_index method
 *
 * @return void
 */
	public function bussiness_test_index() {
		$this->TemplateMail->recursive = 0;
		$this->set('templateMails', $this->Paginator->paginate());
	}

/**
 * bussiness_test_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_view($id = null) {
		if (!$this->TemplateMail->exists($id)) {
			throw new NotFoundException(__('Invalid template mail'));
		}
		$options = array('conditions' => array('TemplateMail.' . $this->TemplateMail->primaryKey => $id));
		$this->set('templateMail', $this->TemplateMail->find('first', $options));
	}

/**
 * bussiness_test_add method
 *
 * @return void
 */
	public function bussiness_test_add() {
		if ($this->request->is('post')) {
			$this->TemplateMail->create();
			if ($this->TemplateMail->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail could not be saved. Please, try again.'));
			}
		}
		$templateMailTypes = $this->TemplateMail->TemplateMailType->find('list');
		$this->set(compact('templateMailTypes'));
	}

/**
 * bussiness_test_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_edit($id = null) {
		if (!$this->TemplateMail->exists($id)) {
			throw new NotFoundException(__('Invalid template mail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TemplateMail->save($this->request->data)) {
				$this->Session->setFlash(__('The template mail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The template mail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TemplateMail.' . $this->TemplateMail->primaryKey => $id));
			$this->request->data = $this->TemplateMail->find('first', $options);
		}
		$templateMailTypes = $this->TemplateMail->TemplateMailType->find('list');
		$this->set(compact('templateMailTypes'));
	}

/**
 * bussiness_test_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function bussiness_test_delete($id = null) {
		$this->TemplateMail->id = $id;
		if (!$this->TemplateMail->exists()) {
			throw new NotFoundException(__('Invalid template mail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->TemplateMail->delete()) {
			$this->Session->setFlash(__('The template mail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The template mail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
    
    // test helper
    function test_helper(){
        $this->render("test_helper_template_mail"); // load  file view test_helper.ctp 
    }
    
    //send mail
    public function send_mail() {
        /*			 * *** start sendmail ***** */
        App::uses('CakeEmail', 'Network/Email');
        $email = new CakeEmail('aws');
        $email->config('aws');
        $email->subject('Send Mail Test');

        $email->from(array('admin@tabikobo.com' => 'ocquanth2811@yahoo.com.vn'));
        $email->to('hangvtm@evolableasia.vn');

//        if (!empty($arrCcVal)) {
//            $email->cc($arrCcVal);
//        }
//        if (!empty($arrBccVal)) {
//            $email->bcc($arrBccVal);
//        }


        $email->emailFormat('text');
        $email->viewVars(array(
            'content' => 'Hang test send mail'
        ));

        $email->template('_send');
        $email->send(); exit;
        if (!$email->send()) {
            echo 'Sent mail successfully!!!';
            return;
        }
    }
}
