<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Permits Controller
 *
 * @property \App\Model\Table\PermitsTable $Permits
 * @method \App\Model\Entity\Permit[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PermitsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Biddings'],
        ];
        $permits = $this->paginate($this->Permits);

        $this->set(compact('permits'));
    }

    /**
     * View method
     *
     * @param string|null $id Permit id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $permit = $this->Permits->get($id, [
            'contain' => ['Biddings'],
        ]);

        $this->set(compact('permit'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $permit = $this->Permits->newEmptyEntity();
        if ($this->request->is('post')) {
            $permit = $this->Permits->patchEntity($permit, $this->request->getData());
            if ($this->Permits->save($permit)) {
                $this->Flash->success(__('The permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permit could not be saved. Please, try again.'));
        }
        $biddings = $this->Permits->Biddings->find('list', ['limit' => 200])->all();
        $this->set(compact('permit', 'biddings'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Permit id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $permit = $this->Permits->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $permit = $this->Permits->patchEntity($permit, $this->request->getData());
            if ($this->Permits->save($permit)) {
                $this->Flash->success(__('The permit has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The permit could not be saved. Please, try again.'));
        }
        $biddings = $this->Permits->Biddings->find('list', ['limit' => 200])->all();
        $this->set(compact('permit', 'biddings'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Permit id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $permit = $this->Permits->get($id);
        if ($this->Permits->delete($permit)) {
            $this->Flash->success(__('The permit has been deleted.'));
        } else {
            $this->Flash->error(__('The permit could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
