<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GuestUsers Controller
 *
 * @property \App\Model\Table\GuestUsersTable $GuestUsers
 */
class GuestUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $guestUsers = $this->paginate($this->GuestUsers);

        $this->set(compact('guestUsers'));
        $this->set('_serialize', ['guestUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Guest User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $guestUser = $this->GuestUsers->get($id, [
            'contain' => []
        ]);

        $this->set('guestUser', $guestUser);
        $this->set('_serialize', ['guestUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $guestUser = $this->GuestUsers->newEntity();
        if ($this->request->is('post')) {
            debug($_POST); die();
            $guestUser = $this->GuestUsers->patchEntity($guestUser, $this->request->data);
            if ($this->GuestUsers->save($guestUser)) {
                $this->Flash->success(__('The guest user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guest user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guestUser'));
        $this->set('_serialize', ['guestUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Guest User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $guestUser = $this->GuestUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $guestUser = $this->GuestUsers->patchEntity($guestUser, $this->request->data);
            if ($this->GuestUsers->save($guestUser)) {
                $this->Flash->success(__('The guest user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The guest user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('guestUser'));
        $this->set('_serialize', ['guestUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Guest User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $guestUser = $this->GuestUsers->get($id);
        if ($this->GuestUsers->delete($guestUser)) {
            $this->Flash->success(__('The guest user has been deleted.'));
        } else {
            $this->Flash->error(__('The guest user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
