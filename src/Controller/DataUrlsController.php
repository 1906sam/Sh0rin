<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DataUrls Controller
 *
 * @property \App\Model\Table\DataUrlsTable $DataUrls
 */
class DataUrlsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $dataUrls = $this->paginate($this->DataUrls);

        $this->set(compact('dataUrls'));
        $this->set('_serialize', ['dataUrls']);
    }

    /**
     * View method
     *
     * @param string|null $id Data Url id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dataUrl = $this->DataUrls->get($id, [
            'contain' => ['Users', 'UrlInformations']
        ]);

        $this->set('dataUrl', $dataUrl);
        $this->set('_serialize', ['dataUrl']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dataUrl = $this->DataUrls->newEntity();
        if ($this->request->is('post')) {
            $dataUrl = $this->DataUrls->patchEntity($dataUrl, $this->request->data);
            if ($this->DataUrls->save($dataUrl)) {
                $this->Flash->success(__('The data url has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The data url could not be saved. Please, try again.'));
            }
        }
        $users = $this->DataUrls->Users->find('list', ['limit' => 200]);
        $this->set(compact('dataUrl', 'users'));
        $this->set('_serialize', ['dataUrl']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Data Url id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dataUrl = $this->DataUrls->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataUrl = $this->DataUrls->patchEntity($dataUrl, $this->request->data);
            if ($this->DataUrls->save($dataUrl)) {
                $this->Flash->success(__('The data url has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The data url could not be saved. Please, try again.'));
            }
        }
        $users = $this->DataUrls->Users->find('list', ['limit' => 200]);
        $this->set(compact('dataUrl', 'users'));
        $this->set('_serialize', ['dataUrl']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Data Url id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dataUrl = $this->DataUrls->get($id);
        if ($this->DataUrls->delete($dataUrl)) {
            $this->Flash->success(__('The data url has been deleted.'));
        } else {
            $this->Flash->error(__('The data url could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
