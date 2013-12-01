<?php
App::uses('ResFolder', 'Model');

/**
 * ResFolder Test Case
 *
 */
class ResFolderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.permissions_user',
		'app.res_file'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ResFolder = ClassRegistry::init('ResFolder');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResFolder);

		parent::tearDown();
	}

}
