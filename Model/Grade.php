<?php
App::uses('AppModel', 'Model');
/**
 * Grade Model
 *
 * @property Enrollment $Enrollment
 */
class Grade extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'enrollment_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
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
		'Enrollment' => array(
			'className' => 'Enrollment',
			'foreignKey' => 'enrollment_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}