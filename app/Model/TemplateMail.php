<?php
App::uses('AppModel', 'Model');
/**
 * TemplateMail Model
 *
 * @property TemplateMailType $TemplateMailType
 * @property AttachFile $AttachFile
 */
class TemplateMail extends AppModel {

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
		'TemplateMailType' => array(
			'className' => 'TemplateMailType',
			'foreignKey' => 'template_mail_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
public $actsAs = array('Search.Searchable');
    
    public $filterArgs = array(
        array('name' => 'subject', 'type' => 'query','method'=>'filterSubject'),
        array('name' => 'name', 'type' => 'query','method'=>'filterName'),
        array('name' => 'body', 'type' => 'query','method'=>'filterBody'),
        array('name' => 'template_mail_type_id', 'type' => 'query','method'=>'filterTemplateMailTypeId'),
    );
	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AttachFile' => array(
			'className' => 'AttachFile',
			'foreignKey' => 'template_mail_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

    /**
 * filterSubject method
 *
 * @return void
 */    
    public function filterSubject($data = array()) {
        $filter = $data['subject'];
        if(empty($filter))
        {
            return array();
        }
        $cond = array(
            'AND' => array(
                $this->alias . '.subject LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }
    
    public function filterName($data = array()) {
        $filter = $data['name'];
        if(empty($filter))
        {
            return array();
        }
        $cond = array(
            'AND' => array(
                $this->alias . '.name LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }
    
    public function filterBody($data = array()) {
        $filter = $data['body'];
        if(empty($filter))
        {
            return array();
        }
        $cond = array(
            'AND' => array(
                $this->alias . '.body LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }
    
    public function filterTemplateMailTypeId($data = array()) {
        $filter = $data['template_mail_type_id'];
        if(empty($filter))
        {
            return array();
        }
        $cond = array(
            'AND' => array(
                $this->alias . '.template_mail_type_id LIKE' => $filter
            ));
        return $cond;
    }

}
