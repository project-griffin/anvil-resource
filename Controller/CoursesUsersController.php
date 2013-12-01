<?php
App::uses('AppController', 'Controller');
/**
 * CoursesUsers Controller
 *
 * @property CoursesUser $CoursesUser
 * @property PaginatorComponent $Paginator
 */
class CoursesUsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

    public function beforeFilter() {
            $this->M = $this->CoursesUser;
            parent::beforeFilter();
    }

}
