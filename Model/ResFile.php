<?php
App::uses('AppModel', 'Model');
/**
 * ResFile Model
 *
 * @property ResFolder $ResFolder
 */
class ResFile extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'res_folder_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ResFolder' => array(
			'className' => 'ResFolder',
			'foreignKey' => 'res_folder_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
