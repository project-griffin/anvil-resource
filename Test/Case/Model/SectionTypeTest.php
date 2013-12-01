<?php
App::uses('SectionType', 'Model');

/**
 * SectionType Test Case
 *
 */
class SectionTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.section_type',
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
		'app.sections_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SectionType = ClassRegistry::init('SectionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SectionType);

		parent::tearDown();
	}

}
