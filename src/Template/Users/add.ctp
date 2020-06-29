<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Adición de Usuarios') ?></legend>
            <div class="text-form">
                <label>Nombres:</label>
                <?= $this->Form->input('names', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="text-form">
                <label>Apellidos:</label>
                <?= $this->Form->input('surnames', ['label' => false, 'class'=>'form-control']); ?>
            </div>

            <div class="text-form">
                <label>Distrito:</label>
                <?= $this->Form->input('district', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="text-form">
                <label>Cargo:</label>
                <?= $this->Form->input('function', ['label' => false, 'class'=>'form-control']); ?>
            </div>

            <div class="text-form">
                <label>Número de CI (parte numeral):</label>
                <?= $this->Form->input('username', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="text-form">
                <label>Password:</label>
                <?= $this->Form->input('password', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="text-form">
                <label>Activo:</label>
                <?= $this->Form->input('active', ['label' => false, 'class'=>'form-control']); ?>
            </div>
            <div class="text-form">
                <label>Fecha de expiración de la cuenta:</label>
                <?= $this->Form->input('expirationAccount', ['label' => false, 'class'=>'form-control', 'empty' => true]); ?>
            </div>
    </fieldset>
    <div class="text-center">
        <?= $this->Form->button(__('Agregar'), ['class' => 'text-center btn btn-primary btn-lg']); ?>
    </div>
    <?= $this->Form->end() ?>
</div>



