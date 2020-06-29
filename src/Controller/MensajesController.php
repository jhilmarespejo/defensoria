<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Victima Controller
 *
 * @property \App\Model\Table\VictimaTable $Victima
 *
 * @method \App\Model\Entity\Victima[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MensajesController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);   
        $this->Auth->allow(['add']);
    }
    /**
     * add method
     * receive the id_denunciante, nombre, distrito and message from caht/index 
     * @return \Cake\Http\Response|void
     */
    public function add(){
    $mensaje = $this->Mensajes->newEntity();

    if ($this->request->is('post')) {
        //pr($this->request->data);
        //exit;
        $this->request->data['mensajes']['nombres']= $this->request->data['nombres'];
        $this->request->data['mensajes']['de']= $this->request->data['denunciante_id'];
        $this->request->data['mensajes']['para']= $this->request->data['distrito'];
        $this->request->data['mensajes']['mensaje']= $this->request->data['mensaje'];

        //exit;
        $mensaje = $this->Mensajes->patchEntity($mensaje, $this->request->data['mensajes']);
       
        if ($this->Mensajes->save($mensaje)) {

            $mensajes=$this->Mensajes->find('all', ['conditions' => ['de'=>$this->request->data['mensajes']['de'], 'nombres'=> $this->request->data['mensajes']['nombres'] ]])->toArray();

           

            $this->set('mensajes', $mensajes);
            $this->render('/Mensajes/index');
            //exit;
          //$denunciante_id=$this->Mensajes->find('list', ['conditions' => ['distrito'=>$this->request->data['distrito'], 'nombres'=>$this->request->data['nombres']]])->first();
            //pr($denunciante_id);
            //$this->set('denunciante_id', $denunciante_id);
        
        } 
    }
  }


}


?>