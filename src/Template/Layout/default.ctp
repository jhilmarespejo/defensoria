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

$cakeDescription ='.:Defensoria - GAMEA:.';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?php 
        //echo $this->Html->css('bootstrap/bootstrap.min431.css'); 
        echo $this->Html->css('bootstrap/bootstrap.css'); 
        echo $this->Html->script('jquery.min.js');
        echo $this->Html->script('bootstrap/bootstrap.min.js');
        
        
    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
    
    <div class="container clearfix">
        <div class=" row">
             <div class="board col-xs-3 col-sm-3 col-md-3 col-lg-3 " style="height: max-content;">
                <fieldset> <legend ><h2 class="txt-shadow"><?= __('MENÚ') ?></h2></legend></fieldset>
                <hr>
                <ul class="">
                    <li><?= $this->Html->link(__('List Victima'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Denuncia'), ['controller' => 'Denuncia', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('Nueva Denuncia'), ['controller' => 'Denuncia', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('Nuevo Agresor'), ['controller' => 'Agresor', 'action' => 'add']) ?></li>

                </ul>
                <p>
                    <?= $this->Flash->render() ?>
                </p>
            </div>
            <div class="col-xs-05 col-sm-05 col-md-05 col-lg-05 ">
            </div>
            <div class="board col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <?= $this->fetch('content') ?>
            </div>    
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>

