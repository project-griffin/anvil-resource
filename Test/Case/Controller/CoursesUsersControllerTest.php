<?php
App::uses('CoursesUsersController', 'Controller');

/**
 * CoursesUsersController Test Case
 *
 */
class CoursesUsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.courses_user',
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
		'app.section_type',
		'app.sections_user',
		'app.grade',
		'app.permission',
		'app.permissions_user',
		'app.role',
		'app.roles_user'
	);

}
