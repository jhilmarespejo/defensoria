<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Victima $victima
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Victima'), ['action' => 'edit', $victima->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Victima'), ['action' => 'delete', $victima->id], ['confirm' => __('Are you sure you want to delete # {0}?', $victima->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Victima'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Victima'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Denuncia'), ['controller' => 'Denuncia', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Denuncium'), ['controller' => 'Denuncia', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="victima view large-9 medium-8 columns content">
    <h3><?= h($victima->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ci') ?></th>
            <td><?= h($victima->ci) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ci Exp') ?></th>
            <td><?= h($victima->ci_exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimento') ?></th>
            <td><?= h($victima->fecha_nacimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lugar Nacimiento') ?></th>
            <td><?= h($victima->lugar_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($victima->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Procedencia') ?></th>
            <td><?= h($victima->procedencia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= h($victima->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($victima->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($victima->nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ap Paterno') ?></th>
            <td><?= h($victima->ap_paterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ap Materno') ?></th>
            <td><?= h($victima->ap_materno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ap Casada') ?></th>
            <td><?= h($victima->ap_casada) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado Civil') ?></th>
            <td><?= h($victima->estado_civil) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instrucción') ?></th>
            <td><?= h($victima->instrucción) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ocupacion') ?></th>
            <td><?= h($victima->ocupacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero Hijos') ?></th>
            <td><?= h($victima->numero_hijos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipio') ?></th>
            <td><?= h($victima->municipio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($victima->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distrito') ?></th>
            <td><?= h($victima->distrito) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Idioma') ?></th>
            <td><?= h($victima->idioma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($victima->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Denuncia') ?></h4>
        <?php if (!empty($victima->denuncia)): ?>
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
            <?php foreach ($victima->denuncia as $denuncia): ?>
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
