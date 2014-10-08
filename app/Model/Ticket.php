<?php
App::uses('AppModel', 'Model');
/**
 * Ticket Model
 *
 */
class Ticket extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'content' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
    
    public $actsAs = array('Search.Searchable');
    
    public $filterArgs = array(
        array('name' => 'title', 'type' => 'query','method'=>'filterTitle'),
        array('name' => 'status', 'type' => 'string'),
       
    );
    
/**
construct *
 * @return void
 */
     public function __construct($id = false,$table = null,$ids = null) {
        $this->statuses = array(
            'open' => __('Open',true),
            'closed' => __('Closed',true),
        );
        $this->categories = array(
            'bug' => __('bug',true),
            'support' => __('support',true),
            'technical' => __('technical',true),
            'other' => __('other',true),
        );
        parent::__construct($id,$table,$ids);
        
        }
     
/**
 * filterTitle method
 *
 * @return void
 */    
    public function filterTitle($data = array()) {
        $filter = $data['title'];
        if(empty($filter))
        {
            return array();
        }
        $cond = array(
            'OR' => array(
                $this->alias . '.title LIKE' => '%' . $filter . '%',
            ));
        return $cond;
    }
}
