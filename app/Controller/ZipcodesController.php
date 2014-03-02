<?php
App::uses('AppController', 'Controller');
/**
 * Zipcodes Controller
 *
 * @property Zipcode $Zipcode
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ZipcodesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Text', 'Js');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Filter.Filter');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Zipcode->recursive = 0;
		$this->set('zipcodes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zipcode->exists($id)) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		$options = array('conditions' => array('Zipcode.' . $this->Zipcode->primaryKey => $id));
		$this->set('zipcode', $this->Zipcode->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zipcode->create();
			if ($this->Zipcode->save($this->request->data)) {
				$this->Session->setFlash(__('The zipcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zipcode could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Zipcode->exists($id)) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zipcode->save($this->request->data)) {
				$this->Session->setFlash(__('The zipcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zipcode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zipcode.' . $this->Zipcode->primaryKey => $id));
			$this->request->data = $this->Zipcode->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Zipcode->id = $id;
		if (!$this->Zipcode->exists()) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Zipcode->delete()) {
			$this->Session->setFlash(__('The zipcode has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zipcode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Zipcode->recursive = 0;
		$this->set('zipcodes', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Zipcode->exists($id)) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		$options = array('conditions' => array('Zipcode.' . $this->Zipcode->primaryKey => $id));
		$this->set('zipcode', $this->Zipcode->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Zipcode->create();
			if ($this->Zipcode->save($this->request->data)) {
				$this->Session->setFlash(__('The zipcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zipcode could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Zipcode->exists($id)) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zipcode->save($this->request->data)) {
				$this->Session->setFlash(__('The zipcode has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zipcode could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zipcode.' . $this->Zipcode->primaryKey => $id));
			$this->request->data = $this->Zipcode->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Zipcode->id = $id;
		if (!$this->Zipcode->exists()) {
			throw new NotFoundException(__('Invalid zipcode'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Zipcode->delete()) {
			$this->Session->setFlash(__('The zipcode has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zipcode could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

    var $filters = array(  
        'index' => array(  
            'Zipcode' => array(
                'Zipcode.zip',  
                'Zipcode.city',  
                'Zipcode.state',  
#            'Zipcode.city' => array('condition' => '='),  
#            'Zipcode.state' => array('condition' => '='),  
            ),
        )
    );
    
}
