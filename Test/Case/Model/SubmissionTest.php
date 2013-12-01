<?php
App::uses('Submission', 'Model');

/**
 * Submission Test Case
 *
 */
class SubmissionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submission',
		'app.assignment',
		'app.course',
		'app.term',
		'app.res_folder',
		'app.section',
		'app.section_type',
		'app.enrollment',
		'app.user',
		'app.profile',
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
		$this->Submission = ClassRegistry::init('Submission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Submission);

		parent::tearDown();
	}

}
