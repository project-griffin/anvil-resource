<?php
App::uses('Permission', 'Model');

/**
 * Permission Test Case
 *
 */
class PermissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permission',
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
		'app.courses_user',
		'app.section_type',
		'app.sections_user',
		'app.grade',
		'app.permissions_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Permission = ClassRegistry::init('Permission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Permission);

		parent::tearDown();
	}

}
