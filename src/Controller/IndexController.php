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
class IndexController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);   
        $this->Auth->allow(['index']);

        if (in_array($this->request->getParam('action'), ['mensajes', 'operador'])){
            $this->getEventManager()->off($this->Csrf);
        }
    }

    public function index(){

    }

}
    

?>