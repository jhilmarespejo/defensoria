<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Session\DatabaseSession;


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

                    if(!isset($_SESSION)) { session_start(); }


                    $_SESSION["last_msg_id"] = $mensaje->id;
                    return $this->redirect(['controller' => 'Mensajes', 'action' => 'msgs', $this->request->data['canal'] ] );
                } else {exit;}

        }
    }

//request for poolAjax
    public function msgs($canal = null){
        set_time_limit(60); // Set the appropriate time limit
        ignore_user_abort(false); // Stop when polling breaks

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
} //end class


?>