<?php
App::uses('SectionsUser', 'Model');

/**
 * SectionsUser Test Case
 *
 */
class SectionsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sections_user',
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
		$this->SectionsUser = ClassRegistry::init('SectionsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SectionsUser);

		parent::tearDown();
	}

}
