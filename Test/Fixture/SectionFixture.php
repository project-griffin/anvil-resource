<?php
/**
 * SectionFixture
 *
 */
class SectionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'course_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'section_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'number' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_sections_courses1_idx' => array('column' => 'course_id', 'unique' => 0),
			'fk_sections_section_types1_idx' => array('column' => 'section_type_id', 'unique' => 0)
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
			'section_type_id' => 1,
			'number' => 'Lor'
		),
	);

}
