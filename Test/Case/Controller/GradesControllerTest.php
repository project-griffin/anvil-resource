<?php
App::uses('GradesController', 'Controller');

/**
 * GradesController Test Case
 *
 */
class GradesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grade',
		'app.enrollment',
		'app.section',
		'app.course',
		'app.term',
		'app.assignment',
		'app.res_folder',
		'app.res_file',
		'app.submission',
		'app.user',
		'app.profile',
		'app.courses_user',
		'app.permission',
		'app.permissions_user',
		'app.role',
		'app.roles_user',
		'app.sections_user',
		'app.section_type'
	);

}
