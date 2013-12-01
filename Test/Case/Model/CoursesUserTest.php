<?php
App::uses('CoursesUser', 'Model');

/**
 * CoursesUser Test Case
 *
 */
class CoursesUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courses_user',
		'app.user',
		'app.profile',
		'app.enrollment',
		'app.section',
		'app.course',
		'app.term',
		'app.assignment',
		'app.res_folder',
		'app.res_file',
		'app.submission',
		'app.section_type',
		'app.sections_user',
		'app.grade',
		'app.permission',
		'app.permissions_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CoursesUser = ClassRegistry::init('CoursesUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CoursesUser);

		parent::tearDown();
	}

}
