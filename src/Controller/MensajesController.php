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
        $this->Auth->allow(['add', 'msgs']);
        if (in_array($this->request->getParam('action'), ['add', 'msgs'])){
            $this->getEventManager()->off($this->Csrf);
        }
    }


    /**
     * add method
     * receive the id_denunciante, nombre, distrito and message from caht/index 
     * @return \Cake\Http\Response|void
     */
    public function add(){
        $mensaje = $this->Mensajes->newEntity();

        if ($this->request->is('post')) {

            $mensaje = $this->Mensajes->patchEntity($mensaje, $this->request->data);
           
            if ($this->Mensajes->save($mensaje)) {

                return $this->redirect(['controller' => 'Chat', 'action' => 'mensajes', $this->request->data['canal'] ] );

                // $mensajes = $this->Mensajes->find( 'all' )->where('canal' => $this->request->data['para'] ] ])->toArray();
                // $this->set('mensajes', $mensajes);
                // $this->render('/Chat/chatbox');
            
            } 
        }
    }

//request for poolAjax
    public function msgs($canal =null){
        if($canal){
            $mensaje = $this->Mensajes->newEntity();

            $mensajes = $this->Mensajes->find( 'all' )->where(['canal' => $canal])->toArray();
            $this->set('mensajes', $mensajes);
            $this->layout = false;
            $this->render('/Chat/chatbox');

        }else{
            exit;
        }
    }




}


?>