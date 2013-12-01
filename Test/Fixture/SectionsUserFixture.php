<?php
/**
 * SectionsUserFixture
 *
 */
class SectionsUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'section_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('section_id', 'user_id'), 'unique' => 1),
			'fk_sections_has_users_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_sections_has_users_sections1_idx' => array('column' => 'section_id', 'unique' => 0)
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
			'section_id' => 1,
			'user_id' => '529939e2-43b0-4640-a6f9-0effbc12a047'
		),
	);

}
