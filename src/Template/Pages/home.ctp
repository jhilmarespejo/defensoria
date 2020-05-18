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

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = '.:Defensoria - GAMEA:.';
?>
 <style type="text/css">
    body, html {
  height: 100%;
}
   .bg {
       /* background: url(webroot/css/bootstrap/background3.jpg) no-repeat center center fixed;*/
         background-image: url(webroot/css/bootstrap/background3.jpg);
        /* The image used */
      /* Full height */
      height: 100%; 

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
}
@media only screen and (min-width: 0px) and (max-width: 500px) {
  .bg {
    background: url('webroot/css/bootstrap/background3-sm.jpg') 50% 80% no-repeat fixed !important;
    background-size: auto !important;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
}
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
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

        <div class="bg"></div>


    
<script src="//code.tidio.co/kkna3lizmtzdsb07xpfcjior3ndv7mxb.js" async></script>
</body>
</html>


  
    