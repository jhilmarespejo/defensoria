<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agresor[]|\Cake\Collection\CollectionInterface $agresor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agresor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Denuncia'), ['controller' => 'Denuncia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Denuncium'), ['controller' => 'Denuncia', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agresor index large-9 medium-8 columns content">
    <h3><?= __('Agresor') ?></h3>
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
                <th scope="col"><?= $this->Paginator->sort('residencia_habitual') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distrito') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idioma') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agresor as $agresor): ?>
            <tr>
                <td><?= $this->Number->format($agresor->id) ?></td>
                <td><?= h($agresor->ci) ?></td>
                <td><?= h($agresor->ci_exp) ?></td>
                <td><?= h($agresor->fecha_nacimento) ?></td>
                <td><?= h($agresor->lugar_nacimiento) ?></td>
                <td><?= h($agresor->sexo) ?></td>
                <td><?= h($agresor->procedencia) ?></td>
                <td><?= h($agresor->edad) ?></td>
                <td><?= h($agresor->celular) ?></td>
                <td><?= h($agresor->nombres) ?></td>
                <td><?= h($agresor->ap_paterno) ?></td>
                <td><?= h($agresor->ap_materno) ?></td>
                <td><?= h($agresor->ap_casada) ?></td>
                <td><?= h($agresor->estado_civil) ?></td>
                <td><?= h($agresor->instrucción) ?></td>
                <td><?= h($agresor->ocupacion) ?></td>
                <td><?= h($agresor->residencia_habitual) ?></td>
                <td><?= h($agresor->municipio) ?></td>
                <td><?= h($agresor->direccion) ?></td>
                <td><?= h($agresor->distrito) ?></td>
                <td><?= h($agresor->idioma) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agresor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agresor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agresor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agresor->id)]) ?>
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
