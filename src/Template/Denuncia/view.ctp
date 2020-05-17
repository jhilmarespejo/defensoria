<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Denuncium $denuncium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Denuncium'), ['action' => 'edit', $denuncium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Denuncium'), ['action' => 'delete', $denuncium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $denuncium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Denuncia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Denuncium'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Victima'), ['controller' => 'Victima', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Victima'), ['controller' => 'Victima', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Agresor'), ['controller' => 'Agresor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agresor'), ['controller' => 'Agresor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="denuncia view large-9 medium-8 columns content">
    <h3><?= h($denuncium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Victima') ?></th>
            <td><?= $denuncium->has('victima') ? $this->Html->link($denuncium->victima->id, ['controller' => 'Victima', 'action' => 'view', $denuncium->victima->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agresor') ?></th>
            <td><?= $denuncium->has('agresor') ? $this->Html->link($denuncium->agresor->id, ['controller' => 'Agresor', 'action' => 'view', $denuncium->agresor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Atencion') ?></th>
            <td><?= h($denuncium->fecha_atencion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Forma Ingreso Servicio') ?></th>
            <td><?= h($denuncium->forma_ingreso_servicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipologia') ?></th>
            <td><?= h($denuncium->tipologia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agresion') ?></th>
            <td><?= h($denuncium->agresion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Testimonio Denunciante') ?></th>
            <td><?= h($denuncium->testimonio_denunciante) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion Denuncia') ?></th>
            <td><?= h($denuncium->descripcion_denuncia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parentesco Agresor') ?></th>
            <td><?= h($denuncium->parentesco_agresor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acciones Inmediatas') ?></th>
            <td><?= h($denuncium->acciones_inmediatas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Acciones Coordinadas') ?></th>
            <td><?= h($denuncium->acciones_coordinadas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Resultado') ?></th>
            <td><?= h($denuncium->fecha_resultado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Resultados Obtenidos') ?></th>
            <td><?= h($denuncium->resultados_obtenidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Paginas Adjuntas') ?></th>
            <td><?= h($denuncium->num_paginas_adjuntas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Funcionario Accion') ?></th>
            <td><?= h($denuncium->nombre_funcionario_accion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($denuncium->id) ?></td>
        </tr>
    </table>
</div>
