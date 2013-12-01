<?php
App::uses('ResFile', 'Model');

/**
 * ResFile Test Case
 *
 */
class ResFileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.res_file',
		'app.res_folder',
		'app.course',
		'app.term',
		'app.assignment',
		'app.submission',
		'app.user',
		'app.profile',
		'app.enrollment',
		'app.section',
		'app.section_type',
		'app.sections_user',
		'app.grade',
		'app.courses_user',
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
		$this->ResFile = ClassRegistry::init('ResFile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResFile);

		parent::tearDown();
	}

}
