<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agresor $agresor
 */
?>

<div class="agresor view large-9 medium-8 columns content">
    <h3><?= h('DATOS DEL AGRESOR') ?></h3>
    <table class="vertical-table table-bordered table-hover table responsive">
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
    
</div>
