<?php
App::uses('AppModel', 'Model');
/**
 * AttachFile Model
 *
 * @property TemplateMail $TemplateMail
 * @property AttachFile $
 */
class AttachFile extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'TemplateMail' => array(
			'className' => 'TemplateMail',
			'foreignKey' => 'template_mail_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
