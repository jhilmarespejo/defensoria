<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agresor $agresor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agresor'), ['action' => 'edit', $agresor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agresor'), ['action' => 'delete', $agresor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agresor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agresor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agresor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Denuncia'), ['controller' => 'Denuncia', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Denuncium'), ['controller' => 'Denuncia', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agresor view large-9 medium-8 columns content">
    <h3><?= h($agresor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ci') ?></th>
            <td><?= h($agresor->ci) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ci Exp') ?></th>
            <td><?= h($agresor->ci_exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimento') ?></th>
            <td><?= h($agresor->fecha_nacimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lugar Nacimiento') ?></th>
            <td><?= h($agresor->lugar_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($agresor->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Procedencia') ?></th>
            <td><?= h($agresor->procedencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= h($agresor->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($agresor->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($agresor->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ap Paterno') ?></th>
            <td><?= h($agresor->ap_paterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ap Materno') ?></th>
            <td><?= h($agresor->ap_materno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ap Casada') ?></th>
            <td><?= h($agresor->ap_casada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Civil') ?></th>
            <td><?= h($agresor->estado_civil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instrucción') ?></th>
            <td><?= h($agresor->instrucción) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocupacion') ?></th>
            <td><?= h($agresor->ocupacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Residencia Habitual') ?></th>
            <td><?= h($agresor->residencia_habitual) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipio') ?></th>
            <td><?= h($agresor->municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($agresor->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distrito') ?></th>
            <td><?= h($agresor->distrito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idioma') ?></th>
            <td><?= h($agresor->idioma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agresor->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Denuncia') ?></h4>
        <?php if (!empty($agresor->denuncia)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Victima Id') ?></th>
                <th scope="col"><?= __('Agresor Id') ?></th>
                <th scope="col"><?= __('Fecha Atencion') ?></th>
                <th scope="col"><?= __('Forma Ingreso Servicio') ?></th>
                <th scope="col"><?= __('Tipologia') ?></th>
                <th scope="col"><?= __('Agresion') ?></th>
                <th scope="col"><?= __('Testimonio Denunciante') ?></th>
                <th scope="col"><?= __('Descripcion Denuncia') ?></th>
                <th scope="col"><?= __('Parentesco Agresor') ?></th>
                <th scope="col"><?= __('Acciones Inmediatas') ?></th>
                <th scope="col"><?= __('Acciones Coordinadas') ?></th>
                <th scope="col"><?= __('Fecha Resultado') ?></th>
                <th scope="col"><?= __('Resultados Obtenidos') ?></th>
                <th scope="col"><?= __('Num Paginas Adjuntas') ?></th>
                <th scope="col"><?= __('Nombre Funcionario Accion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($agresor->denuncia as $denuncia): ?>
            <tr>
                <td><?= h($denuncia->id) ?></td>
                <td><?= h($denuncia->victima_id) ?></td>
                <td><?= h($denuncia->agresor_id) ?></td>
                <td><?= h($denuncia->fecha_atencion) ?></td>
                <td><?= h($denuncia->forma_ingreso_servicio) ?></td>
                <td><?= h($denuncia->tipologia) ?></td>
                <td><?= h($denuncia->agresion) ?></td>
                <td><?= h($denuncia->testimonio_denunciante) ?></td>
                <td><?= h($denuncia->descripcion_denuncia) ?></td>
                <td><?= h($denuncia->parentesco_agresor) ?></td>
                <td><?= h($denuncia->acciones_inmediatas) ?></td>
                <td><?= h($denuncia->acciones_coordinadas) ?></td>
                <td><?= h($denuncia->fecha_resultado) ?></td>
                <td><?= h($denuncia->resultados_obtenidos) ?></td>
                <td><?= h($denuncia->num_paginas_adjuntas) ?></td>
                <td><?= h($denuncia->nombre_funcionario_accion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Denuncia', 'action' => 'view', $denuncia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Denuncia', 'action' => 'edit', $denuncia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Denuncia', 'action' => 'delete', $denuncia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $denuncia->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
