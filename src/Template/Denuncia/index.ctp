<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Denuncium[]|\Cake\Collection\CollectionInterface $denuncia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Denuncium'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Victima'), ['controller' => 'Victima', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Victima'), ['controller' => 'Victima', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Agresor'), ['controller' => 'Agresor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Agresor'), ['controller' => 'Agresor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="denuncia index large-9 medium-8 columns content">
    <h3><?= __('Denuncia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('victima_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agresor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_atencion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('forma_ingreso_servicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipologia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('agresion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('testimonio_denunciante') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion_denuncia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parentesco_agresor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acciones_inmediatas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acciones_coordinadas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_resultado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resultados_obtenidos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_paginas_adjuntas') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre_funcionario_accion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($denuncia as $denuncium): ?>
            <tr>
                <td><?= $this->Number->format($denuncium->id) ?></td>
                <td><?= $denuncium->has('victima') ? $this->Html->link($denuncium->victima->id, ['controller' => 'Victima', 'action' => 'view', $denuncium->victima->id]) : '' ?></td>
                <td><?= $denuncium->has('agresor') ? $this->Html->link($denuncium->agresor->id, ['controller' => 'Agresor', 'action' => 'view', $denuncium->agresor->id]) : '' ?></td>
                <td><?= h($denuncium->fecha_atencion) ?></td>
                <td><?= h($denuncium->forma_ingreso_servicio) ?></td>
                <td><?= h($denuncium->tipologia) ?></td>
                <td><?= h($denuncium->agresion) ?></td>
                <td><?= h($denuncium->testimonio_denunciante) ?></td>
                <td><?= h($denuncium->descripcion_denuncia) ?></td>
                <td><?= h($denuncium->parentesco_agresor) ?></td>
                <td><?= h($denuncium->acciones_inmediatas) ?></td>
                <td><?= h($denuncium->acciones_coordinadas) ?></td>
                <td><?= h($denuncium->fecha_resultado) ?></td>
                <td><?= h($denuncium->resultados_obtenidos) ?></td>
                <td><?= h($denuncium->num_paginas_adjuntas) ?></td>
                <td><?= h($denuncium->nombre_funcionario_accion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $denuncium->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $denuncium->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $denuncium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $denuncium->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
