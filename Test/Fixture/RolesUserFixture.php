<?php
/**
 * RolesUserFixture
 *
 */
class RolesUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('user_id', 'role_id'), 'unique' => 1),
			'fk_users_has_roles_roles1_idx' => array('column' => 'role_id', 'unique' => 0),
			'fk_users_has_roles_users1_idx' => array('column' => 'user_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'user_id' => '529939e2-c1dc-4990-8e98-0effbc12a047',
			'role_id' => '529939e2-d0b4-4c4d-9388-0effbc12a047'
		),
	);

}
