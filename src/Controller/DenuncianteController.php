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

          $denunciante_id=$this->Denunciante->find('list', ['conditions' => ['distrito'=>$this->request->data['distrito'], 'nombres'=>$this->request->data['nombres']]])->first();
            //pr($denunciante_id);
            $this->set('denunciante_id', $denunciante_id);
            $this->render('/Denunciante/index');
        
        } 
    }
  }
     public function index(){}


    

}



?>