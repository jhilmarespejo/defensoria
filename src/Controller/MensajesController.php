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
        $this->Auth->allow(['add', 'msgs', 'txtmsgs','checkmsgs']);
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
        ignore_user_abort(true);
        $mensaje = $this->Mensajes->newEntity();

        if ($this->request->is('post')) {


            $this->request->data['fechahora'] = date("Y-m-d H:i:s");
            $mensaje = $this->Mensajes->patchEntity($mensaje, $this->request->data);
                if ($this->Mensajes->save($mensaje)) {
                    // $file = fopen('CHAT/'.$this->request->data['plataforma'].'/'.$this->request->data['canal'].'.txt', 'a') or die("Error al crear el archivo chat");  
                    // fwrite($file, json_encode($this->request->data) . PHP_EOL);
                    // fclose($file);
                    if(!isset($current_user)){
                        return $this->redirect(['controller' => 'Mensajes', 'action' => 'msgs', $this->request->data['canal'] ] );    
                    } else {       
                        pr($this->request->data['canal']);
                        pr(strtotime($this->request->data['fechahora']));
                        exit;

                        return $this->redirect(['controller' => 'Mensajes', 'action' => 'checkmsgs', $this->request->data['canal'], strtotime($this->request->data['fechahora']) ] );
                    }
                }

        } else {exit('xxxxx');}

    }

//request for poolAjax
    public function checkmsgs($canal = null, $timestamp = null){

        if ($this->request->is('post')){
            $fecha_ac = isset( $this->request->data()['timestamp'] ) ? $this->request->data()['timestamp']:0;
            $fecha_bd = isset($row['timestamp']) ? $row['timestamp']:0;
            $canal=$this->request->data()['canal'];
            //pr($this->request->data()); exit;
        } else{
            $fecha_ac = isset( $timestamp ) ? $timestamp:0;
            $fecha_bd = isset($row['timestamp']) ? $row['timestamp']:0;
            //exit($fecha_bd);
        }

            // $fecha_ac = isset( $this->request->data()['timestamp'] ) ? $this->request->data()['timestamp']:0;
            // $fecha_bd = isset($row['timestamp']) ? $row['timestamp']:0;
            set_time_limit(0);
            while( $fecha_bd <= $fecha_ac )
                 {   
                    $mensajes = $this->Mensajes->find()
                    ->select(['canal','fechahora'])
                    ->where(['canal' => $canal])
                    ->order(['fechahora' => 'DESC limit 1'])
                    ->toArray();
                    sleep(1);
                    clearstatcache();
                    foreach ($mensajes as $mensaje) {
                        $fecha_bd  = strtotime($mensaje->fechahora);
                    }
                }

            $this->set('fecha_bd', $fecha_bd);   
            //exit; 
            //$this->viewBuilder()->layout(false);
            //return $this->redirect(['controller' => 'Chat', 'action' => 'operador'] );
        
    }

    public function msgs($canal = null){
        if($canal){
            $mensaje = $this->Mensajes->newEntity();

                $_SESSION["canal"] = $canal;

                $mensajes = $this->Mensajes->find( 'all' )->where(['canal' => $canal])->toArray();
                $this->set('mensajes', $mensajes);
                $this->layout = false;
                $this->render('/Chat/chatbox');


        }else{
            exit('x');
        }
    }

} //end class


?>