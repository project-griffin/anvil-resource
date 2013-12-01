<?php
App::uses('Section', 'Model');

/**
 * Section Test Case
 *
 */
class SectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.section',
		'app.course',
		'app.term',
		'app.assignment',
		'app.res_folder',
		'app.res_file',
		'app.submission',
		'app.user',
		'app.profile',
		'app.enrollment',
		'app.grade',
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
		$this->Section = ClassRegistry::init('Section');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Section);

		parent::tearDown();
	}

}
