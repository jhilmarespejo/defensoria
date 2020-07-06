<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;


/**
 * Victima Controller
 *
 * @property \App\Model\Table\VictimaTable $Victima
 *
 * @method \App\Model\Entity\Victima[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DenuncianteController extends AppController
{


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
        if (in_array($this->request->action, ['add'])) {
           $this->eventManager()->off($this->Csrf);
        }
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
  public function add(){
    $denunciante = $this->Denunciante->newEntity();

    if ($this->request->is('post')) {
        $denunciante = $this->Denunciante->patchEntity($denunciante, $this->request->data);
        
        if ($this->Denunciante->save($denunciante)) {
            
            $this->set(['denunciante_id'=>$denunciante->id, 'nombres'=>$this->request->data['nombres'],'distrito'=>$this->request->data['distrito'], 'plataforma'=>$this->request->data['plataforma'] ]);
            
            /* a welcome message is generated */
            $mensajesTable = TableRegistry::get('Mensajes');
            $mensaje = $mensajesTable->newEntity();
             
            //pr($this->request->data);exit();

            if(!isset($_SESSION)) 
            { 
                session_start(); 
            } 
            $_SESSION["nombres"] = $mensaje->nombres = $this->request->data['nombres'] ;
            $_SESSION["para"] = $mensaje->de = 'Distrito '.$this->request->data['distrito'] ;
            $_SESSION["de"] = $mensaje->para = $denunciante->id ;
            $mensaje->mensaje = 'Bien venid@ '.$this->request->data['nombres'].'. ¿En que podemos ayudarle?' ;
            $_SESSION["plataforma"] = $mensaje->plataforma = $this->request->data['plataforma'] ;     
            $_SESSION["canal"] = $mensaje->canal = $denunciante->id ;

            if ($mensajesTable->save($mensaje)) {
                return $this->redirect(['controller' => 'Mensajes', 'action' => 'msgs', $denunciante->id]);
            }    

        
        } 
    }
  }
     public function index(){}


    

}



?>