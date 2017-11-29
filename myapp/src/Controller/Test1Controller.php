<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Test1 Controller
 *
 * @property \App\Model\Table\Test1Table $Test1
 *
 * @method \App\Model\Entity\Test1[] paginate($object = null, array $settings = [])
 */
class Test1Controller extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $test1 = $this->paginate($this->Test1);

        $this->set(compact('test1'));
        $this->set('_serialize', ['test1']);
    }

    /**
     * View method
     *
     * @param string|null $id Test1 id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $test1 = $this->Test1->get($id, [
            'contain' => []
        ]);

        $this->set('test1', $test1);
        $this->set('_serialize', ['test1']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $test1 = $this->Test1->newEntity();
        if ($this->request->is('post')) {
            $test1 = $this->Test1->patchEntity($test1, $this->request->getData());
            if ($this->Test1->save($test1)) {
                $this->Flash->success(__('The test1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test1 could not be saved. Please, try again.'));
        }
        $this->set(compact('test1'));
        $this->set('_serialize', ['test1']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Test1 id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $test1 = $this->Test1->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $test1 = $this->Test1->patchEntity($test1, $this->request->getData());
            if ($this->Test1->save($test1)) {
                $this->Flash->success(__('The test1 has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The test1 could not be saved. Please, try again.'));
        }
        $this->set(compact('test1'));
        $this->set('_serialize', ['test1']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Test1 id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $test1 = $this->Test1->get($id);
        if ($this->Test1->delete($test1)) {
            $this->Flash->success(__('The test1 has been deleted.'));
        } else {
            $this->Flash->error(__('The test1 could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
