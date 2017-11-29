<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BakeTest Controller
 *
 * @property \App\Model\Table\BakeTestTable $BakeTest
 *
 * @method \App\Model\Entity\BakeTest[] paginate($object = null, array $settings = [])
 */
class BakeTestController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $bakeTest = $this->paginate($this->BakeTest);

        $this->set(compact('bakeTest'));
        $this->set('_serialize', ['bakeTest']);
    }

    /**
     * View method
     *
     * @param string|null $id Bake Test id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $bakeTest = $this->BakeTest->get($id, [
            'contain' => []
        ]);

        $this->set('bakeTest', $bakeTest);
        $this->set('_serialize', ['bakeTest']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $bakeTest = $this->BakeTest->newEntity();
        if ($this->request->is('post')) {
            $bakeTest = $this->BakeTest->patchEntity($bakeTest, $this->request->getData());
            if ($this->BakeTest->save($bakeTest)) {
                $this->Flash->success(__('The bake test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bake test could not be saved. Please, try again.'));
        }
        $this->set(compact('bakeTest'));
        $this->set('_serialize', ['bakeTest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Bake Test id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $bakeTest = $this->BakeTest->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bakeTest = $this->BakeTest->patchEntity($bakeTest, $this->request->getData());
            if ($this->BakeTest->save($bakeTest)) {
                $this->Flash->success(__('The bake test has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The bake test could not be saved. Please, try again.'));
        }
        $this->set(compact('bakeTest'));
        $this->set('_serialize', ['bakeTest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Bake Test id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $bakeTest = $this->BakeTest->get($id);
        if ($this->BakeTest->delete($bakeTest)) {
            $this->Flash->success(__('The bake test has been deleted.'));
        } else {
            $this->Flash->error(__('The bake test could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
