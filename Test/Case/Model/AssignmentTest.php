<?php
App::uses('Assignment', 'Model');

/**
 * Assignment Test Case
 *
 */
class AssignmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assignment',
		'app.course',
		'app.term',
		'app.res_folder',
		'app.section',
		'app.section_type',
		'app.enrollment',
		'app.user',
		'app.profile',
		'app.submission',
		'app.courses_user',
		'app.permission',
		'app.permissions_user',
		'app.sections_user',
		'app.grade',
		'app.res_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Assignment = ClassRegistry::init('Assignment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Assignment);

		parent::tearDown();
	}

}
