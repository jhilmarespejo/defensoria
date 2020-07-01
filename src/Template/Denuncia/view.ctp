<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Denuncium $denuncium
 */
?>

<div class="denuncia view large-9 medium-8 columns content">
    <h3 class="text-center">DETALLE DE LA DENUNCIA</h3>
    <table class="vertical-table table-bordered table-hover table responsive">

        <tr>
            <th scope="row"><?= __('Número de caso') ?></th>
            <td><?= h($denuncium->id)?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Victima') ?></th>
            <td><?= $denuncium->has('victima') ? $this->Html->link($denuncium->victima->nombres.' '.$denuncium->victima->ap_paterno.' '.$denuncium->victima->ap_materno, ['controller' => 'Victima', 'action' => 'view', $denuncium->victima->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Agresor') ?></th>
            <td><?= $denuncium->has('agresor') ? $this->Html->link($denuncium->agresor->nombres.' '.$denuncium->agresor->ap_paterno.' '.$denuncium->agresor->ap_materno, ['controller' => 'Agresor', 'action' => 'view', $denuncium->agresor->id]) : '' ?></td>
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
        <!-- <tr>
            <th scope="row"><?= __('Num Paginas Adjuntas') ?></th>
            <td><?//= h($denuncium->num_paginas_adjuntas) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre Funcionario Accion') ?></th>
            <td><?//= h($denuncium->nombre_funcionario_accion) ?></td>
        </tr> -->
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($denuncium->id) ?></td>
        </tr> -->
    </table>
</div>
