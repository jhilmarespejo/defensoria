<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Victima[]|\Cake\Collection\CollectionInterface $victima
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Victima'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Denuncia'), ['controller' => 'Denuncia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Denuncium'), ['controller' => 'Denuncia', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="victima index large-9 medium-8 columns content">
    <h3><?= __('Victima') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ci') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ci_exp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nacimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lugar_nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('procedencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('celular') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ap_paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ap_materno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ap_casada') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_civil') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instrucción') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ocupacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero_hijos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distrito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idioma') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($victima as $victima): ?>
            <tr>
                <td><?= $this->Number->format($victima->id) ?></td>
                <td><?= h($victima->ci) ?></td>
                <td><?= h($victima->ci_exp) ?></td>
                <td><?= h($victima->fecha_nacimento) ?></td>
                <td><?= h($victima->lugar_nacimiento) ?></td>
                <td><?= h($victima->sexo) ?></td>
                <td><?= h($victima->procedencia) ?></td>
                <td><?= h($victima->edad) ?></td>
                <td><?= h($victima->celular) ?></td>
                <td><?= h($victima->nombres) ?></td>
                <td><?= h($victima->ap_paterno) ?></td>
                <td><?= h($victima->ap_materno) ?></td>
                <td><?= h($victima->ap_casada) ?></td>
                <td><?= h($victima->estado_civil) ?></td>
                <td><?= h($victima->instrucción) ?></td>
                <td><?= h($victima->ocupacion) ?></td>
                <td><?= h($victima->numero_hijos) ?></td>
                <td><?= h($victima->municipio) ?></td>
                <td><?= h($victima->direccion) ?></td>
                <td><?= h($victima->distrito) ?></td>
                <td><?= h($victima->idioma) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $victima->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $victima->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $victima->id], ['confirm' => __('Are you sure you want to delete # {0}?', $victima->id)]) ?>
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
