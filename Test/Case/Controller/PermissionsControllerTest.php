<?php
App::uses('PermissionsController', 'Controller');

/**
 * PermissionsController Test Case
 *
 */
class PermissionsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.permission',
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
		'app.permissions_user',
		'app.role',
		'app.roles_user'
	);

}
