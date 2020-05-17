<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Denuncia Controller
 *
 * @property \App\Model\Table\DenunciaTable $Denuncia
 *
 * @method \App\Model\Entity\Denuncium[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DenunciaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Victima', 'Agresor']
        ];
        $denuncia = $this->paginate($this->Denuncia);

        $this->set(compact('denuncia'));
    }

    /**
     * View method
     *
     * @param string|null $id Denuncium id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $denuncium = $this->Denuncia->get($id, [
            'contain' => ['Victima', 'Agresor']
        ]);

        $this->set('denuncium', $denuncium);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $denuncium = $this->Denuncia->newEntity();
        if ($this->request->is('post')) {
            $denuncium = $this->Denuncia->patchEntity($denuncium, $this->request->getData());
            if ($this->Denuncia->save($denuncium)) {
                $this->Flash->success(__('The denuncium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The denuncium could not be saved. Please, try again.'));
        }
        $victima = $this->Denuncia->Victima->find('list', ['limit' => 200]);
        $agresor = $this->Denuncia->Agresor->find('list', ['limit' => 200]);
        $this->set(compact('denuncium', 'victima', 'agresor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Denuncium id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $denuncium = $this->Denuncia->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $denuncium = $this->Denuncia->patchEntity($denuncium, $this->request->getData());
            if ($this->Denuncia->save($denuncium)) {
                $this->Flash->success(__('The denuncium has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The denuncium could not be saved. Please, try again.'));
        }
        $victima = $this->Denuncia->Victima->find('list', ['limit' => 200]);
        $agresor = $this->Denuncia->Agresor->find('list', ['limit' => 200]);
        $this->set(compact('denuncium', 'victima', 'agresor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Denuncium id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $denuncium = $this->Denuncia->get($id);
        if ($this->Denuncia->delete($denuncium)) {
            $this->Flash->success(__('The denuncium has been deleted.'));
        } else {
            $this->Flash->error(__('The denuncium could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
