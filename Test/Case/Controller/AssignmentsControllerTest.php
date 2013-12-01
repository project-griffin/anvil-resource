<?php
App::uses('AssignmentsController', 'Controller');

/**
 * AssignmentsController Test Case
 *
 */
class AssignmentsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.assignment',
		'app.course',
		'app.term',
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
		'app.role',
		'app.roles_user',
		'app.sections_user',
		'app.grade',
		'app.res_file'
	);

}
