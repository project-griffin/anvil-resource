<?php
App::uses('SectionsUsersController', 'Controller');

/**
 * SectionsUsersController Test Case
 *
 */
class SectionsUsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sections_user',
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
		'app.grade',
		'app.permission',
		'app.permissions_user',
		'app.role',
		'app.roles_user'
	);

}
