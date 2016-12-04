<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UrlInformations Controller
 *
 * @property \App\Model\Table\UrlInformationsTable $UrlInformations
 */
class UrlInformationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DataUrls']
        ];
        $urlInformations = $this->paginate($this->UrlInformations);

        $this->set(compact('urlInformations'));
        $this->set('_serialize', ['urlInformations']);
    }

    /**
     * View method
     *
     * @param string|null $id Url Information id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $urlInformation = $this->UrlInformations->get($id, [
            'contain' => ['DataUrls']
        ]);

        $this->set('urlInformation', $urlInformation);
        $this->set('_serialize', ['urlInformation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $urlInformation = $this->UrlInformations->newEntity();
        if ($this->request->is('post')) {
            $urlInformation = $this->UrlInformations->patchEntity($urlInformation, $this->request->data);
            if ($this->UrlInformations->save($urlInformation)) {
                $this->Flash->success(__('The url information has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The url information could not be saved. Please, try again.'));
            }
        }
        $dataUrls = $this->UrlInformations->DataUrls->find('list', ['limit' => 200]);
        $this->set(compact('urlInformation', 'dataUrls'));
        $this->set('_serialize', ['urlInformation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Url Information id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $urlInformation = $this->UrlInformations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $urlInformation = $this->UrlInformations->patchEntity($urlInformation, $this->request->data);
            if ($this->UrlInformations->save($urlInformation)) {
                $this->Flash->success(__('The url information has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The url information could not be saved. Please, try again.'));
            }
        }
        $dataUrls = $this->UrlInformations->DataUrls->find('list', ['limit' => 200]);
        $this->set(compact('urlInformation', 'dataUrls'));
        $this->set('_serialize', ['urlInformation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Url Information id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $urlInformation = $this->UrlInformations->get($id);
        if ($this->UrlInformations->delete($urlInformation)) {
            $this->Flash->success(__('The url information has been deleted.'));
        } else {
            $this->Flash->error(__('The url information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
