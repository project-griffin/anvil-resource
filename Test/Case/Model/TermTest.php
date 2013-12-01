<?php
App::uses('Term', 'Model');

/**
 * Term Test Case
 *
 */
class TermTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.term',
		'app.course',
		'app.assignment',
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
		$this->Term = ClassRegistry::init('Term');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Term);

		parent::tearDown();
	}

}
