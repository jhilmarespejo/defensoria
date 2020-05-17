<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Victima Controller
 *
 * @property \App\Model\Table\VictimaTable $Victima
 *
 * @method \App\Model\Entity\Victima[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VictimaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $victima = $this->paginate($this->Victima);

        $this->set(compact('victima'));
    }

    /**
     * View method
     *
     * @param string|null $id Victima id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $victima = $this->Victima->get($id, [
            'contain' => ['Denuncia']
        ]);

        $this->set('victima', $victima);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $victima = $this->Victima->newEntity();

        $this->loadModel('Agresor');
        $agresor = $this->Agresor->newEntity();
        
        $this->loadModel('Denuncia');
        $denuncium = $this->Denuncia->newEntity();
        $victima_id = $this->Denuncia->Victima->find('list', ['limit' => 200]);
        $agresor_id = $this->Denuncia->Agresor->find('list', ['limit' => 200]);
        $this->set(compact('victima', 'agresor', 'denuncium', 'victima_id', 'agresor_id'));

        if ($this->request->is('post')) {
            //pr($this->request); exit;

            $victima = $this->Victima->patchEntity($victima, $this->request->getData());
            if ($this->Victima->save($victima)) {
                $this->Flash->success(__('DATO GUARDADO CORRECTAMENTE'));

                //$this->viewBuilder()->layout(false);
                // $this->set(['ninos'=>$datosnino]);
                $this->render('/Victima/add');
            
                //return $this->redirect(['action' => 'add']);
            } else{
                $this->Flash->error(__('ERROR A GUARDAR EL DATO'));
            }

        }
        // $this->set(compact('victima'));
       //exit('xxxxxxxxxxxxxxxxx');
    }

    /**
     * Edit method
     *
     * @param string|null $id Victima id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $victima = $this->Victima->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $victima = $this->Victima->patchEntity($victima, $this->request->getData());
            if ($this->Victima->save($victima)) {
                $this->Flash->success(__('The victima has been saved.'));


                return $this->redirect(['action' => 'add']);

            }
            $this->Flash->error(__('The victima could not be saved. Please, try again.'));
        }
        $this->set(compact('victima'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Victima id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $victima = $this->Victima->get($id);
        if ($this->Victima->delete($victima)) {
            $this->Flash->success(__('The victima has been deleted.'));
        } else {
            $this->Flash->error(__('The victima could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
