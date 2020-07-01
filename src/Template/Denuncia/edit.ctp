<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Denuncium $denuncium
 */

?>

<div class="denuncia form large-9 medium-8 columns content table">
    <?= $this->Form->create($denuncium, ['id' => 'denuncium-form']) ?>
    <fieldset>
        <legend class="text-center"><?= __('Edicion de datos de la denuncia') ?></legend>
        <hr/>
        <div class="form-group"> 
            <?= $this->form->control('x.casoid',['label'=>'Agresor', 'value'=>$denuncium->id, 'class' => 'form-control', 'disabled'=>true]); ?>
        </div>
        <div class="form-group"> 
            <?php   echo $this->Form->hidden('victima_id', ['value'=>$denuncium->victima->id, 'id'=>'victima_id']); 
                    echo $this->Form->hidden('agresor_id', ['value'=>$denuncium->agresor->id, 'id'=>'agresor_id']);?>
            
            <?= $denuncium->has('victima') ? $this->Form->control('x.victima', ['label'=>'Víctima', 'value'=>$denuncium->victima->nombres.' '.$denuncium->victima->ap_paterno.' '.$denuncium->victima->ap_materno, 'class' => 'form-control', 'disabled'=>true]) : '' ?>
        </div>
        <div class="form-group"> 
            <?= $denuncium->has('agresor') ? $this->form->control('x.agresor',['label'=>'Agresor', 'value'=>$denuncium->agresor->nombres.' '.$denuncium->agresor->ap_paterno.' '.$denuncium->agresor->ap_materno, 'class' => 'form-control', 'disabled'=>true]) : '' ?>
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('fecha_atencion', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('forma_ingreso_servicio', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('tipologia', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('agresion', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('testimonio_denunciante', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('descripcion_denuncia', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('parentesco_agresor', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('acciones_inmediatas', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('acciones_coordinadas', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('fecha_resultado', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?php echo $this->Form->control('resultados_obtenidos', ['class' => 'form-control']); ?> 
        </div>
        <!-- <div class="form-group"> 
            <?//php echo $this->Form->control('num_paginas_adjuntas', ['class' => 'form-control']); ?> 
        </div>
        <div class="form-group"> 
            <?//php echo $this->Form->control('nombre_funcionario_accion', ['class' => 'form-control']); ?> 
        </div> -->
    </fieldset>
    <?= $this->Form->button(__('Guardar'),['class' => 'btn btn-warning btn-primary btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
 <script type="text/javascript">
     $('#denuncium-form').submit(function() {
        $('#processing').modal('show');
        $('div#loading').removeClass('invisible'); 
    })
 </script>

   <div class="modal fade" data-backdrop="static" id="processing">
    <div class="modal-dialog">
        <div class="text-center modal-content">
            <span><strong>Procesando...</strong></span><br>
            <?php echo $this->Html->image('loading.gif');?>
        </div>
    </div>
</div>