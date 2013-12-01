<?php
/**
 * PermissionsUserFixture
 *
 */
class PermissionsUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'permission_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'allow' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => array('permission_id', 'user_id'), 'unique' => 1),
			'fk_permissions_has_users_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_permissions_has_users_permissions1_idx' => array('column' => 'permission_id', 'unique' => 0)
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
			'permission_id' => '529939e2-26cc-4b57-bc42-0effbc12a047',
			'user_id' => '529939e2-34dc-4269-85e0-0effbc12a047',
			'allow' => 1
		),
	);

}
