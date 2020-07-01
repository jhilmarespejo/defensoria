<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Agresor Controller
 *
 * @property \App\Model\Table\AgresorTable $Agresor
 *
 * @method \App\Model\Entity\Agresor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AgresorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $agresor = $this->paginate($this->Agresor);

        $this->set(compact('agresor'));
    }

    /**
     * View method
     *
     * @param string|null $id Agresor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $agresor = $this->Agresor->get($id, [
            'contain' => ['Denuncia']
        ]);

        $this->set('agresor', $agresor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $agresor = $this->Agresor->newEntity();
        $this->set(compact('agresor'));

        if ($this->request->is('post')) {
            $agresor = $this->Agresor->patchEntity($agresor, $this->request->data['agresor']);
           //pr($this->request->data);exit;
            if ($this->Agresor->save($agresor)) {
                
                $this->set(['msg'=>'Datos guardados con éxito', 'id'=>$agresor->id, 'notification'=>'alert-success'] );
                $this->render('/Victima/notification');


            } else{
                $this->set(['msg'=>'Hubo un problema al guardar los datos', 'id'=>'', 'notification'=>'alert-danger'] );
                 $this->render('/Victima/notification');
            }
            
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Agresor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $agresor = $this->Agresor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $agresor = $this->Agresor->patchEntity($agresor, $this->request->getData());
            if ($this->Agresor->save($agresor)) {
                $this->Flash->success(__('The agresor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The agresor could not be saved. Please, try again.'));
        }
        $this->set(compact('agresor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Agresor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $agresor = $this->Agresor->get($id);
        if ($this->Agresor->delete($agresor)) {
            $this->Flash->success(__('The agresor has been deleted.'));
        } else {
            $this->Flash->error(__('The agresor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
