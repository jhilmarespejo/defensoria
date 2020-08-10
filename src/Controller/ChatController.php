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
class ChatController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);   
        $this->Auth->allow(['index', 'mensajes', 'findnumber']);

        if (in_array($this->request->getParam('action'), ['mensajes', 'operador'])){
            $this->getEventManager()->off($this->Csrf);
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($plataforma)
    {
        if (isset($plataforma)) {
            $this->set('plataforma', $plataforma);
        } else {
            $this->redirect('/');
        }
    }

    public function findnumber()
    {
        if ($this->request->is('post')) {

           $this->LoadModel('Users');
            $officer= $this->Users->find()->select(['id', 'names','surnames', 'district', 'plataforma', 'celular', 'corporativo'])->where(['plataforma' => $this->request->data['plataforma'], 'district' => $this->request->data['distrito']])->toArray();

               // pr($officer);
               // exit;
            $this->set('officer', $officer['0']);
            $this->layout = false;
            $this->render('/Chat/chatwapp');
        }
        
        //$this->set(compact('denuncium', 'victima', 'agresor'));
    }


/* deliver list of users online for operator*/
    public function operador()
    {
        $distrito = 'Distrito '.$this->Auth->user('district');
        $plataforma = $this->Auth->user('plataforma');

        $this->LoadModel('Mensajes');
        //$mensajes=$this->Mensajes->find('all', ['conditions' => ['para'=> $distrito ]] )-->toArray();
        $denunciantes = $this->Mensajes->find()->select(['de', 'nombres','fechahora'])->where(['para' => $distrito, 'plataforma' => $plataforma])->group(['de'])->toArray();
            $this->set('denunciantes', $denunciantes);
    }

}


?>