<?php
/**
 * CoursesUserFixture
 *
 */
class CoursesUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'course_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('course_id', 'user_id'), 'unique' => 1),
			'fk_courses_has_users_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_courses_has_users_courses1_idx' => array('column' => 'course_id', 'unique' => 0)
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
			'course_id' => 1,
			'user_id' => '529939e1-c1e4-4dae-8d80-0effbc12a047'
		),
	);

}
