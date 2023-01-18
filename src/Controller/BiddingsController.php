<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Biddings Controller
 *
 * @property \App\Model\Table\BiddingsTable $Biddings
 * @method \App\Model\Entity\Bidding[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BiddingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Statuses'],
        ];
        $biddings = $this->paginate($this->Biddings);

        $this->set(compact('biddings'));
    }

    /**
     * View method
     *
     * @param string|null $id Bidding id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bidding = $this->Biddings->get($id, [
            'contain' => ['Users', 'Statuses', 'BiddingDetails', 'Permits'],
        ]);

        $this->set(compact('bidding'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bidding = $this->Biddings->newEmptyEntity();
        if ($this->request->is('post')) {
            $bidding = $this->Biddings->patchEntity($bidding, $this->request->getData());
            if ($this->Biddings->save($bidding)) {
                $this->Flash->success(__('The bidding has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidding could not be saved. Please, try again.'));
        }
        $users = $this->Biddings->Users->find('list', ['limit' => 200])->all();
        $statuses = $this->Biddings->Statuses->find('list', ['limit' => 200])->all();
        $this->set(compact('bidding', 'users', 'statuses'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Bidding id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bidding = $this->Biddings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bidding = $this->Biddings->patchEntity($bidding, $this->request->getData());
            if ($this->Biddings->save($bidding)) {
                $this->Flash->success(__('The bidding has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bidding could not be saved. Please, try again.'));
        }
        $users = $this->Biddings->Users->find('list', ['limit' => 200])->all();
        $statuses = $this->Biddings->Statuses->find('list', ['limit' => 200])->all();
        $this->set(compact('bidding', 'users', 'statuses'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Bidding id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bidding = $this->Biddings->get($id);
        if ($this->Biddings->delete($bidding)) {
            $this->Flash->success(__('The bidding has been deleted.'));
        } else {
            $this->Flash->error(__('The bidding could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
