<?php
/**
 * ResFolderFixture
 *
 */
class ResFolderFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'course_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'assignment_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => 'new_folder', 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'visible' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_folders_courses1_idx' => array('column' => 'course_id', 'unique' => 0),
			'fk_folders_assignments1_idx' => array('column' => 'assignment_id', 'unique' => 0),
			'fk_folders_sections1_idx' => array('column' => 'section_id', 'unique' => 0)
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
			'id' => 1,
			'course_id' => 1,
			'assignment_id' => 1,
			'section_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'visible' => 1
		),
	);

}
