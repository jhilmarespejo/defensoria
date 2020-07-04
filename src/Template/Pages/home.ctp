<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

/* JE: add ! and debug false to use home in production*/ 
if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.');
endif;


$cakeDescription = '.:Defensoría - GAMEA:.';
?>
 <style type="text/css">
    body, html {
  height: 100%;}

body, html {
    height: 100%;
    background-repeat: no-repeat;
    background: url(webroot/css/bootstrap/background3.jpg) no-repeat center center fixed;
    background-size: 100% 100%; }

@media only screen and (min-width: 0px) and (max-width: 500px) {
  body {
    background: url('webroot/css/bootstrap/background3-sm.jpg') 50% 80% no-repeat fixed !important;
    background-size: auto !important;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;   }
  .lgbt, .slimdna{
    width: 50%;
    height: auto; }

 </style>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('bootstrap/bootstrap.css') ?>
   
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
    <div class=""><?php echo $this->Html->image('admin.png', ['alt' => 'admin', 'style'=> 'width:4%', 'class' => 'slimdna float-right', 'url' => ['controller' => 'Users', 'action'=>'login'] ]);?></div>
     <div class="foot">    
    <div class="float-right "><span class="h3 txt-shadow-black">SELECCIONE UNA OPCIÓN:   </span></div>
    <br/><br/><br/>
    
    

    <div class="option"><?php echo $this->Html->image('slim.png', ['alt' => 'SlimDNa', 'class' => 'slimdna float-right', 'url' => ['controller' => 'Chat', 'slim'] ]);?></div>
     <div class="option"><?php echo $this->Html->image('dna.png', ['alt' => 'SlimDNa', 'class' => 'slimdna float-right', 'url' => ['controller' => 'Chat', 'dna'] ]);?></div>
    <div class="option"><?php echo $this->Html->image('LGBT.png', ['alt' => 'TLGB', 'class' => 'lgbt float-right', 'url' => ['controller' => 'Chat', 'lgbt'] ]);?></div>
    </div>




</body>
</html>


  
    