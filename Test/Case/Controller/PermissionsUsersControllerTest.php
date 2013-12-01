<?php
App::uses('PermissionsUsersController', 'Controller');

/**
 * PermissionsUsersController Test Case
 *
 */
class PermissionsUsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permissions_user',
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
		'app.sections_user',
		'app.grade',
		'app.permission',
		'app.role',
		'app.roles_user'
	);

}
