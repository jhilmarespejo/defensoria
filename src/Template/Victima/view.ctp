<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Victima $victima
 */
?>

<div class="victima view large-9 medium-8 columns content">
    <h3><?= h('Datos de la víctima') ?></h3>
    <table class="vertical-table table-bordered table-hover table responsive">
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
        
    </table>
    
</div>
