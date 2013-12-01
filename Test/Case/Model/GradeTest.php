<?php
App::uses('Grade', 'Model');

/**
 * Grade Test Case
 *
 */
class GradeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grade',
		'app.enrollment',
		'app.section',
		'app.course',
		'app.term',
		'app.assignment',
		'app.res_folder',
		'app.res_file',
		'app.submission',
		'app.user',
		'app.profile',
		'app.courses_user',
		'app.permission',
		'app.permissions_user',
		'app.sections_user',
		'app.section_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grade = ClassRegistry::init('Grade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grade);

		parent::tearDown();
	}

}
