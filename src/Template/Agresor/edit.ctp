<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agresor $agresor
 */
?>

<div class="agresor form large-9 medium-8 columns content">
    <?= $this->Form->create($agresor) ?>
    <fieldset>
        <legend><?= __('Edit Agresor') ?></legend>
        
            <div class="form-group"> 
                <?php echo $this->Form->control('ci', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('ci_exp', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('fecha_nacimento', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('lugar_nacimiento', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('sexo', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('procedencia', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('edad', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('celular', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('nombres', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('ap_paterno', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('ap_materno', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('ap_casada', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('estado_civil', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('instrucción', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('ocupacion', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('residencia_habitual', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('municipio', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('direccion', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('distrito', ['class' => 'form-control']);?>
            </div>
            <div class="form-group"> 
                <?php echo $this->Form->control('idioma', ['class' => 'form-control']);?>
            </div>
        
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' => 'btn btn-warning btn-primary btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
