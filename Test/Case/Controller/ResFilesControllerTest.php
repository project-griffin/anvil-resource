<?php
App::uses('ResFilesController', 'Controller');

/**
 * ResFilesController Test Case
 *
 */
class ResFilesControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.res_file',
		'app.res_folder',
		'app.course',
		'app.term',
		'app.assignment',
		'app.submission',
		'app.user',
		'app.profile',
		'app.enrollment',
		'app.section',
		'app.section_type',
		'app.sections_user',
		'app.grade',
		'app.courses_user',
		'app.permission',
		'app.permissions_user',
		'app.role',
		'app.roles_user'
	);

}
