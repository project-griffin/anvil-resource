<?php
App::uses('RolesUsersController', 'Controller');

/**
 * RolesUsersController Test Case
 *
 */
class RolesUsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.roles_user',
		'app.role',
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
		'app.permissions_user'
	);

}
