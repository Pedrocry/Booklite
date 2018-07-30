<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emprestimos Controller
 *
 * @property \App\Model\Table\EmprestimosTable $Emprestimos
 *
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmprestimosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $emprestimos = $this->paginate($this->Emprestimos);

        $this->set(compact('emprestimos'));
    }

    /**
     * View method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => []
        ]);

        $this->set('emprestimo', $emprestimo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emprestimo = $this->Emprestimos->newEntity();
        if ($this->request->is('post')) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $this->set(compact('emprestimo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $this->set(compact('emprestimo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimos->get($id);
        if ($this->Emprestimos->delete($emprestimo)) {
            $this->Flash->success(__('The emprestimo has been deleted.'));
        } else {
            $this->Flash->error(__('The emprestimo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
