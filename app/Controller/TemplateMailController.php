<?php
//App::uses('BackendAppController','Backend.Controller');
class TemplateMailController extends AppController {
  var $uses = array('TemplateMail', 'TemplateMailType', 'AttachFile');
  var $helpers = array('Html', 'Form','Paginator'); //CSVヘルパーを設定します

  public function beforeFilter() {
    parent::beforeFilter();
    $this->set('mail_selected', ' selected');
  }

  public function index() {
  }

  public function lists() {
    $this->set('title_for_layout', 'メールマスタ検索');
    if ($this->request->is('get')) {
      //get data from param
      $search_data = Set::filter($this->request->query);

      $conditions = array('status' => 1);
      $login_user = $this->Session->read('avion_auth');

      /*if user is ystem admin or has no any sections->list all templatessections
       * else user just view templates of sections that user belong to
       */
      $groupSystemAdminId = Configure::read('TemplateMail.groupSystemAdminId');
      if($login_user['GroupId'] != $groupSystemAdminId && count($login_user['SectId'])>0){
        //get all user_ids of sections
        $conditions += array('TemplateMail.user_id' => $this->getUsersOfSections($login_user['SectId']));
      }

      if(!empty($search_data['name'])){
        $conditions += array('TemplateMail.name like' => "%" . $search_data['name'] . "%");
      }
      if(!empty($search_data['subject'])){
        $conditions += array('TemplateMail.subject like' => "%" . $search_data['subject'] . "%");
      }
      if(!empty($search_data['body'])){
        $conditions += array('TemplateMail.body like' => "%" . $search_data['body'] . "%");
      }
      $this->request->data['TemplateMail'] = $search_data;
    } elseif ($this->Session->check('conditions')) {
      $conditions = $this->Session->read('conditions');
    }

    //items per page
    $RowPerPage = Configure::read('Paging.row_per_page');

    //get pageno
    if(!empty($search_data['PageNo'])){
      $page_no = $search_data['PageNo'];
    }else{
      $page_no = 1;
    }

    if($page_no >= 1){
      $offeset = ($page_no - 1) * $RowPerPage;
    }else{
      $offeset = $page_no * $RowPerPage;
    }

    $this->loadModel('TemplateMail');

    //paging
    $total_result = $this->TemplateMail->find('count', array('conditions' => $conditions));
    $templates = $this->TemplateMail->find('all', array('conditions' => $conditions, 'limit'=> $RowPerPage, 'offset'=> $offeset, 'order' => array('TemplateMail.id' => 'desc')));
    
    /*
    //load all template names for selectbox
    $template_mail_list = $this->TemplateMail->find('all',array('fields' => array('DISTINCT TemplateMail.name')));
    //echo '<pre>';print_r($template_mail_list);exit;
    foreach ($template_mail_list as $template_mail) {
      if(!in_array($template_mail['TemplateMail']['name'], $t_mail_name_list)) {
        $t_mail_name_list[$template_mail['TemplateMail']['name']] = $template_mail['TemplateMail']['name'];
      }
    }
    $this->set("t_mail_name_list", $t_mail_name_list);
     * 
     */

    // setting for paging
    $pageSetting = array(
        "Found"=> $total_result,
        "PageNo"=> (isset($page_no)?$page_no:0),
        "RecordPerPage"=> $RowPerPage
    );
    $from = $this->_pagingNumSet($total_result, $pageSetting, $RowPerPage);

    $this->set("template_mail_list",$templates);
  }

  public function delete() {
    $user = $this->Session->read('avion_auth');
//        $section_id = isset($user['SectId'][0])?$user['SectId'][0]:null;
    $url = '/admin/template_mail/lists';
    if (isset($this->request->params['pass'][0])) {
      $template_mail = $this->TemplateMail->findById($this->request->params['pass'][0]);
      if (isset($user['SectId'][0]) && $template_mail['TemplateMail']['section_id'] !== $user['SectId'][0]) {
        $this->Session->setFlash(array('このメールテンプレートを削除する権限がありません'), 'flash_bad', array(), 'no_permission');
        $this->redirect($url);
      }

      $id = $this->request->params['pass'][0];
      $conds = array('id' => $id, 'status' => -1);
      $this->TemplateMail->save($conds);
    }
    $this->redirect($url);
  }

  public function edit() {
    $login_user = $this->Session->read('avion_auth');
    $this->loadModel('TemplateMail' );
    $this->loadModel('AttachFile' );
    if ($this->request->is('get')) {
      $gParams = Set::filter($this->request->params);

      if(!empty($gParams['pass'][0])){
        //update
        $this->set('title_for_layout', 'メールマスタ編集');
        $templateId = $gParams['pass'][0];

        $template = $this->TemplateMail->findById($templateId);
        if(!isset($template['TemplateMail'])){
          $this->set('system_err_msg','このメールテンプレートはもうシステムに存在していません。');
        }else{
          $this->request->data = $template['TemplateMail'];
          $this->set("template_mail_type", $template['TemplateMailType']);
          $this->set("attach_files", $template['AttachFile']);
        }
      }else{
        //insert
        $this->set('title_for_layout', 'メールマスタ新規作成');
      }
    }elseif ($this->request->is('post')) {
      $saved_err_msgs = '';
      $inputs = $this->request->data;
      $this->TemplateMail->set($inputs);

      //check unique for each section
      if(!empty($inputs['subject'])){
        $conds_template_mail = array('TemplateMail.subject' => $inputs['subject'], 'TemplateMail.status' => 1);
        if(count($login_user['SectId'])>0){
          //get all user_ids of sections
          $conds_template_mail += array('TemplateMail.user_id' => $this->getUsersOfSections($login_user['SectId']));
        }
        if (!empty($inputs['id'])) {
          $conds_template_mail['TemplateMail.id !='] = $inputs['id'];
        }
       // pr($conds_template_mail);exit;
        $existedTemplateMail = $this->TemplateMail->find('all', array('conditions' => $conds_template_mail));
        if (count($existedTemplateMail) > 0) {
          $saved_err_msgs['err_section_unique'] = array('この件名は既に存在します。');
        }
      }
      
      
      if ($this->TemplateMail->checkValidate($inputs)) {
        //validate is success
        // ファイル移動
        $path = dirname(ROOT . DS . APP_DIR . DS . WEBROOT_DIR);
        //echo $path;exit;
        $upload_folder = Configure::read('TemplateMail.uploadFilesFolder');
        $upload_url = Configure::read('TemplateMail.uploadFilesUrl');
        $uploadedFiles = $this->getAllUploadedFiles($inputs);
        if(count($uploadedFiles)>0){
          foreach ($uploadedFiles as $file){
            $uploadedFileName = time() . $file['name'];
            //$objFile = new File($file['tmp_name']);
            if (move_uploaded_file($file["tmp_name"], $path.$upload_folder.$uploadedFileName)) {
              $info_attached_files[] = 
                array(
                  'name' => $file['name'],
                  'url'  => $upload_url.$uploadedFileName,
                  'type' => $file['type'],
                  'size' => $file['size']
                );
            }
          }
        }
        //get all deteled attached files
        //only exe when update
        if(!empty($inputs['id'])){
          $attachedFiles = $this->AttachFile->find('all', array('conditions' => array('AttachFile.template_mail_id' => $inputs['id'])));
          $noDelattachedFileIds = array();
          if(!empty($inputs['attached_files'])){
            foreach ($inputs['attached_files'] as $attFile){
              $noDelattachedFileIds[] = $attFile['id'];
            }
          }
          
          if(!empty($attachedFiles)){
            foreach ($attachedFiles as $file){
              if(in_array($file['AttachFile']['id'], $noDelattachedFileIds)){
                //no delete
              }else{
                $this->AttachFile->delete($file['AttachFile']['id']);
              }
            }
          }
        }

        $savedData = array(
          'TemplateMail' => array(
            'name' => $inputs['name'],
            'subject' => $inputs['subject'],
            'cc' => $inputs['cc'],
            'bcc' => $inputs['bcc'],
            'body' => $inputs['body'],
          )
        );

        $this->TemplateMail->create();
        if(!empty($inputs['id'])){
          $this->TemplateMail->id = $inputs['id'];
        }else{
          $savedData['user_id'] = $login_user['id'];
          $savedData['status'] = 1;
        }

        if(!$this->TemplateMail->save($savedData['TemplateMail'])){
          $saved_err_msgs['save_fail'] = array('保存できませんでした。');
          $this->set('err_messages',$saved_err_msgs);
          return;
        }
        
        //insert attache files
        if(!empty($info_attached_files) && empty($err_msgs)){
          foreach ($info_attached_files as $attFile){
            $attFile['template_mail_id'] = $this->TemplateMail->id;
            $this->AttachFile->create();
            $this->AttachFile->save($attFile);
          }
        }
        $url = '/admin/template_mail/detail/' . $this->TemplateMail->id;
        $this->redirect($url);
      } else {
        //validate is fail
        $errors = $this->TemplateMail->validationErrors;
        foreach ($errors as $msg){
          $this->Session->setFlash(array(
            $msg[0]
                  ), 'flash_bad', array(), 'bad');
        }
        //pr($errors);
        $this->set('err_messages',$errors);
      }
    }
  }

  public function detail() {
    if (isset($this->request->params['pass'][0])) {
      $id = $this->request->params['pass'][0];

      $this->loadModel('TemplateMail');
      $template_mail = $this->TemplateMail->findById($id);

      $template_mail_type = $this->TemplateMail->TemplateMailType->findById($id);

      $attach_files = $this->AttachFile->find('all', array('conditions' => array('AttachFile.template_mail_id' => $id)));

      $this->set("template_mail", $template_mail);
      $this->set("template_mail_type", $template_mail_type);
      $this->set("attach_files", $attach_files);
    }
  }
  private function getUsersOfSections($section_ids){
    $this->loadModel('UserSectionDb');
    $user_ids = $this->UserSectionDb->find('all', array(
      'fields' => array('DISTINCT UserSectionDb.user_id'),
      'conditions' => array('UserSectionDb.section_id' => $section_ids)
            )
    );
    $cond_user_ids = array();
    //get all templates created by users of logined sections
    if (isset($user_ids) && count($user_ids) > 0) {
      foreach ($user_ids as $val) {
        $cond_user_ids[] = $val['UserSectionDb']['user_id'];
      }
    }
    return $cond_user_ids;
  }
  
  private function getAllUploadedFiles($inputs) {
    $files = array();
    if (!empty($inputs)) {
      foreach ($inputs as $k => $v) {
        if(substr($k,0,20) =='EditTemplateMailFile') $files[$k] = $v;
      }
    }
    return $files;
  }

}