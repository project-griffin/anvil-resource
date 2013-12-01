<?php
App::uses('AppController', 'Controller');
/**
 * Enrollments Controller
 *
 * @property Enrollment $Enrollment
 * @property PaginatorComponent $Paginator
 */
class EnrollmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
    
    public function beforeFilter() {
        $this->M = $this->Enrollment;
        parent::beforeFilter();
    }

}
