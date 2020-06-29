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
        $this->Auth->allow(['index']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($destino)
    {
        $this->set('destino', $destino);
    }

    public function operador()
    {

        $distrito = 'Distrito '.$this->Auth->user('district');
        //pr();exit;


        //$Query = $UsersTable->find('all');

        // $Query->select([ 
        //       'userlevel_id',
        //       'count' => $Query->func()->count('*')
        //     ])
        // ->where(['account_id' => $AccountID])
        // ->group('userlevel_id');



        $this->LoadModel('Mensajes');
        $mensajes=$this->Mensajes->find('all', ['conditions' => ['para'=> $distrito ]] )->toArray();

            $this->set('mensajes', $mensajes);
    }


}


?>