<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agresor $agresor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Agresor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Denuncia'), ['controller' => 'Denuncia', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Denuncium'), ['controller' => 'Denuncia', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agresor form large-9 medium-8 columns content">
    <?= $this->Form->create($agresor) ?>
    <fieldset>
        <legend><?= __('Add Agresor') ?></legend>
        <?php
            echo $this->Form->control('ci');
            echo $this->Form->control('ci_exp');
            echo $this->Form->control('fecha_nacimento');
            echo $this->Form->control('lugar_nacimiento');
            echo $this->Form->control('sexo');
            echo $this->Form->control('procedencia');
            echo $this->Form->control('edad');
            echo $this->Form->control('celular');
            echo $this->Form->control('nombres');
            echo $this->Form->control('ap_paterno');
            echo $this->Form->control('ap_materno');
            echo $this->Form->control('ap_casada');
            echo $this->Form->control('estado_civil');
            echo $this->Form->control('instrucción');
            echo $this->Form->control('ocupacion');
            echo $this->Form->control('residencia_habitual');
            echo $this->Form->control('municipio');
            echo $this->Form->control('direccion');
            echo $this->Form->control('distrito');
            echo $this->Form->control('idioma');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
