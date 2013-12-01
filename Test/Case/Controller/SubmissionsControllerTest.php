<?php
App::uses('SubmissionsController', 'Controller');

/**
 * SubmissionsController Test Case
 *
 */
class SubmissionsControllerTest extends ControllerTestCase {

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
		'app.role',
		'app.roles_user',
		'app.sections_user',
		'app.grade',
		'app.res_file'
	);

}
