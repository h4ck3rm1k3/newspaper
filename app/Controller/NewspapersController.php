<?php
App::uses('AppController', 'Controller');
/**
 * Newspapers Controller
 *
 * @property Newspaper $Newspaper
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class NewspapersController extends AppController {

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
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Newspaper->recursive = 0;
		$this->set('newspapers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Newspaper->exists($id)) {
			throw new NotFoundException(__('Invalid newspaper'));
		}
		$options = array('conditions' => array('Newspaper.' . $this->Newspaper->primaryKey => $id));
		$this->set('newspaper', $this->Newspaper->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Newspaper->create();
			if ($this->Newspaper->save($this->request->data)) {
				$this->Session->setFlash(__('The newspaper has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newspaper could not be saved. Please, try again.'));
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
		if (!$this->Newspaper->exists($id)) {
			throw new NotFoundException(__('Invalid newspaper'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newspaper->save($this->request->data)) {
				$this->Session->setFlash(__('The newspaper has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newspaper could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newspaper.' . $this->Newspaper->primaryKey => $id));
			$this->request->data = $this->Newspaper->find('first', $options);
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
		$this->Newspaper->id = $id;
		if (!$this->Newspaper->exists()) {
			throw new NotFoundException(__('Invalid newspaper'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Newspaper->delete()) {
			$this->Session->setFlash(__('The newspaper has been deleted.'));
		} else {
			$this->Session->setFlash(__('The newspaper could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Newspaper->recursive = 0;
		$this->set('newspapers', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Newspaper->exists($id)) {
			throw new NotFoundException(__('Invalid newspaper'));
		}
		$options = array('conditions' => array('Newspaper.' . $this->Newspaper->primaryKey => $id));
		$this->set('newspaper', $this->Newspaper->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Newspaper->create();
			if ($this->Newspaper->save($this->request->data)) {
				$this->Session->setFlash(__('The newspaper has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newspaper could not be saved. Please, try again.'));
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
		if (!$this->Newspaper->exists($id)) {
			throw new NotFoundException(__('Invalid newspaper'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Newspaper->save($this->request->data)) {
				$this->Session->setFlash(__('The newspaper has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The newspaper could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Newspaper.' . $this->Newspaper->primaryKey => $id));
			$this->request->data = $this->Newspaper->find('first', $options);
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
		$this->Newspaper->id = $id;
		if (!$this->Newspaper->exists()) {
			throw new NotFoundException(__('Invalid newspaper'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Newspaper->delete()) {
			$this->Session->setFlash(__('The newspaper has been deleted.'));
		} else {
			$this->Session->setFlash(__('The newspaper could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
