<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Denuncium $denuncium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Denuncia'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Victima'), ['controller' => 'Victima', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Victima'), ['controller' => 'Victima', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agresor'), ['controller' => 'Agresor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agresor'), ['controller' => 'Agresor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="denuncia form large-9 medium-8 columns content">
    <?= $this->Form->create($denuncium) ?>
    <fieldset>
        <legend><?= __('Add Denuncium') ?></legend>
        <?php
            echo $this->Form->control('victima_id', ['options' => $victima]);
            echo $this->Form->control('agresor_id', ['options' => $agresor]);
            echo $this->Form->control('fecha_atencion');
            echo $this->Form->control('forma_ingreso_servicio');
            echo $this->Form->control('tipologia');
            echo $this->Form->control('agresion');
            echo $this->Form->control('testimonio_denunciante');
            echo $this->Form->control('descripcion_denuncia');
            echo $this->Form->control('parentesco_agresor');
            echo $this->Form->control('acciones_inmediatas');
            echo $this->Form->control('acciones_coordinadas');
            echo $this->Form->control('fecha_resultado');
            echo $this->Form->control('resultados_obtenidos');
            echo $this->Form->control('num_paginas_adjuntas');
            echo $this->Form->control('nombre_funcionario_accion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
