<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Victima $victima
*/
// pr($agresor);
?>

<!-- <div class="board row"> 

   <!--  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
        <fieldset> <legend ><h2 class="txt-shadow"><?= __('MENÚ') ?></h2></legend></fieldset>
        <hr>
        <ul class="">
            <li><?= $this->Html->link(__('List Victima'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Denuncia'), ['controller' => 'Denuncia', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('Nueva Denuncia'), ['controller' => 'Denuncia', 'action' => 'add']) ?></li>
            <li><?= $this->Html->link(__('Nuevo Agresor'), ['controller' => 'Agresor', 'action' => 'add']) ?></li>

        </ul>

    </div> -->

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Registro de víctima</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registro de agresor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Registro de denuncia</a>
  </li>
</ul>


<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <!-- FORMULARIO VICTIMA-->
        <div class=""> 
            <?php echo $this->Form->create('', ['url'=>['controller' => 'victima', 'action'=>'add'], 'id'=>'frm-victima'] ); ?>
            <fieldset>
                <legend ><h2 class="txt-shadow"><?= __('Nuevo Registro de Víctima') ?></h2></legend>
                <hr>

                <div class="row">
                    <div class="col-6 form-group">
                        <!-- <?php //.echo $this->Form->hidden('victima_id', ['value'=>'', 'id'=>'victima_id']);?> -->
                        <label class="txt-shadow">CÉDULA DE INDENTIDAD</label>
                        <?php echo $this->Form->input('ci', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>

                    <div class="col-6 form-group">
                        <label class="txt-shadow">EXPEDIDO</label>
                        <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'LP', 'value' => 'LP'],[ 'text' => 'OR', 'value' => 'OR'],[ 'text' => 'PT', 'value' => 'PT'],[ 'text' => 'CBBA', 'value' => 'CBBA'],[ 'text' => 'CH', 'value' => 'CH'],[ 'text' => 'TJ', 'value' => 'TJ'],[ 'text' => 'PN', 'value' => 'PN'],[ 'text' => 'BN', 'value' => 'BN'],[ 'text' => 'SC', 'value' => 'SC']]; ?>

                        <?php echo $this->Form->select('ci_exp', $options, ['label' => false, 'class'=>'form-control', 'placeholder' => '', 'required' => false] );?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="txt-shadow">NOMBRES</label>
                    <?php echo $this->Form->input('nombres', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'victima_nombres', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">APELLIDO PATERNO</label>
                    <?php echo $this->Form->input('ap_paterno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'victima_ap_paterno', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">APELLIDO MATERNO</label>
                    <?php echo $this->Form->input('ap_materno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'victima_ap_materno', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">APELLIDO DE CASADA</label>
                    <?php echo $this->Form->input('ap_casada', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'victima_ap_casada', 'required' => false] );?>
                </div>

                <div class="form-group">
                    <label class="txt-shadow">FECHA DE NACIMIENTO</label>
                    <?php echo $this->Form->input('fecha_nacimento', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>

                <div class="row">
                    <div class="col-6 form-group">
                        <label class="txt-shadow">EDAD</label>
                        <?php echo $this->Form->input('edad', ['label' => false, 'class'=>'form-control', 'type' => 'number', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'M', 'value' => 'M'],[ 'text' => 'F', 'value' => 'F']]; ?>
                    <div class="col-6 form-group">
                        <label class="txt-shadow">SEXO</label>
                        <?php echo $this->Form->select('sexo', $options, ['label' => true, 'required', 'class'=>'form-control']); ?>

                    </div>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">LUGAR DE NACIMIENTO</label>
                    <?php echo $this->Form->input('lugar_nacimiento', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'URBANO', 'value' => 'URBANO'],[ 'text' => 'RURAL', 'value' => 'RURAL']]; ?>
                    <label class="txt-shadow">PROCEDENCIA</label>
                    <?php echo $this->Form->select('procedencia',$options, ['label' => false, 'class'=>'form-control', 'placeholder' => '', 'required' => false] );?>
                </div>

                <div class="form-group">
                    <label class="txt-shadow">CELULAR/TELEFONO</label>
                    <?php echo $this->Form->input('celular', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>

                <div class="form-group">
                    <label class="txt-shadow">ESTADO CIVIL</label>
                    <?php echo $this->Form->input('estado_civil', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">GRADO DE INSTRUCCIÓN</label>
                    <?php echo $this->Form->input('instrucción', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">OCUPACIÓN</label>
                    <?php echo $this->Form->input('ocupacion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">CANTIDAD DE HIJOS</label>
                    <?php echo $this->Form->input('numero_hijos', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">MUNICIPIO</label>
                    <?php echo $this->Form->input('municipio', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">DIRECCION</label>
                    <?php echo $this->Form->input('direccion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">DISTRITO</label>
                    <?php echo $this->Form->input('distrito', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false, 'maxlength'=>"2", "max"=>"14", "min"=>'1'] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">IDIOMA</label>
                    <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'ESPAÑOL', 'value' => 'ESPAÑOL'],[ 'text' => 'AYMARA', 'value' => 'AYMARA'],[ 'text' => 'QUECHUA', 'value' => 'QUECHUA']]; ?>
                    <?php echo $this->Form->select('idioma',$options, ['label' => false, 'class'=>'form-control', 'placeholder' => '', 'required' => false] );?>
                </div> 
                <?php       ?>
            </fieldset>
            <div class="text-center">
                <?= $this->Form->button(__('GUARDAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'save-victima','type' =>'button']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div> 
        <!-- /FORMULARIO VICTIMA--> 
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <!-- FORMULARIO AGRESOR-->
        <div class="">
            <?php echo $this->Form->create('', ['url'=>['controller' => 'agresor', 'action'=>'add'], 'id'=>'frm-agresor'] ); ?>
            <fieldset>
                <legend ><h2 class="txt-shadow"><?= __('Nuevo Registro de Agresor/a') ?></h2></legend>
                <hr>

                <div class="row">
                    <div class="col-6 form-group">
                        
                        <label class="txt-shadow">CÉDULA DE INDENTIDAD</label>
                        <?php echo $this->Form->input('agresor.ci', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>

                    <div class="col-6 form-group">
                        <label class="txt-shadow">EXPEDIDO</label>

                        <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'LP', 'value' => 'LP'],[ 'text' => 'OR', 'value' => 'OR'],[ 'text' => 'PT', 'value' => 'PT'],[ 'text' => 'CBBA', 'value' => 'CBBA'],[ 'text' => 'CH', 'value' => 'CH'],[ 'text' => 'TJ', 'value' => 'TJ'],[ 'text' => 'PN', 'value' => 'PN'],[ 'text' => 'BN', 'value' => 'BN'],[ 'text' => 'SC', 'value' => 'SC']]; ?>

                        <?php echo $this->Form->select('agresor.ci_exp', $options, ['label' => false, 'class'=>'form-control', 'placeholder' => '', 'required' => false] );?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">NOMBRES</label>
                    <?php echo $this->Form->input('agresor.nombres', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'agresor_nombres', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">APELLIDO PATERNO</label>
                    <?php echo $this->Form->input('agresor.ap_paterno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'agresor_ap_paterno', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">APELLIDO MATERNO</label>
                    <?php echo $this->Form->input('agresor.ap_materno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'agresorap_materno', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">APELLIDO DE CASADA</label>
                    <?php echo $this->Form->input('agresor.ap_casada', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id' => 'agresor_ap_casada', 'required' => false] );?>
                </div>


                <div class="form-group">
                    <label class="txt-shadow">FECHA DE NACIMIENTO</label>
                    <?php echo $this->Form->input('agresor.fecha_nacimento', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="row">
                    <div class="col-6 form-group">
                        <label class="txt-shadow">EDAD</label>
                        <?php echo $this->Form->input('agresor.edad', ['label' => false, 'class'=>'form-control', 'type' => 'number', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'M', 'value' => 'M'],[ 'text' => 'F', 'value' => 'F']]; ?>
                    <div class="col-6 form-group">
                        <label class="txt-shadow">SEXO</label>
                        <?php echo $this->Form->select('agresor.sexo', $options, ['label' => true, 'required', 'class'=>'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">LUGAR DE NACIMIENTO</label>
                    <?php echo $this->Form->input('agresor.lugar_nacimiento', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>

                <div class="form-group">
                    <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'URBANO', 'value' => 'URBANO'],[ 'text' => 'RURAL', 'value' => 'RURAL']]; ?>
                    <label class="txt-shadow">PROCEDENCIA</label>
                    <?php echo $this->Form->select('agresor.procedencia',$options, ['label' => false, 'class'=>'form-control', 'placeholder' => '', 'required' => false] );?>
                </div>

                <div class="form-group">
                    <label class="txt-shadow">CELULAR</label>
                    <?php echo $this->Form->input('agresor.celular', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false, 'maxlength'=>"8"] );?>
                </div>

                <div class="form-group">
                    <label class="txt-shadow">ESTADO CIVIL</label>
                    <?php echo $this->Form->input('agresor.estado_civil', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">GRADO DE INSTRUCCIÓN</label>
                    <?php echo $this->Form->input('agresor.instrucción', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">OCUPACIÓN</label>
                    <?php echo $this->Form->input('agresor.ocupacion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">RESIDENCIA HABITUAL</label>
                    <?php echo $this->Form->input('agresor.residencia_habitual', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">MUNICIPIO</label>
                    <?php echo $this->Form->input('agresor.municipio', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">DIRECCIÓN</label>
                    <?php echo $this->Form->input('agresor.direccion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">DISTRITO</label>
                    <?php echo $this->Form->input('agresor.distrito', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false, 'maxlength'=>"2", "max"=>"14", "min"=>'1'] );?>
                </div>
                <div class="form-group">
                    <label class="txt-shadow">IDIOMA</label>
                    <?php $options = [[ 'text' => '', 'value' => '', 'selected', 'disabled'],[ 'text' => 'ESPAÑOL', 'value' => 'ESPAÑOL'],[ 'text' => 'AYMARA', 'value' => 'AYMARA'],[ 'text' => 'QUECHUA', 'value' => 'QUECHUA']]; ?>
                    <?php echo $this->Form->select('agresor.idioma',$options, ['label' => false, 'class'=>'form-control', 'placeholder' => '', 'required' => false] );?>
                </div>
            </fieldset>
            <div class="text-center">
                <?= $this->Form->button(__('GUARDAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'save-agresor', 'type' => 'button']) ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
        <!-- /FORMULARIO AGRESOR-->
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <!-- FORMULARIO DENUNCIA-->
        <div class="">
            
            <?php echo $this->Form->create('', ['url'=>['controller' => 'denuncia', 'action'=>'add'], 'id'=>'frm-denuncia'] ); ?>
                <fieldset>
                    <legend ><h2 class="txt-shadow"><?= __('Nuevo Registro de Denuncia') ?></h2></legend>
                    <hr>
                    <div class="form-group">
                        <?php echo $this->Form->hidden('victima_id', ['value'=>'', 'id'=>'victima_id']); echo $this->Form->hidden('agresor_id', ['value'=>'', 'id'=>'agresor_id']);?>
                        <label class="txt-shadow">NOMBRE COMPLETO DE LA VÍCTIMA</label>
                        <?php echo $this->Form->input('', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'disabled'=>true, 'id' => 'victima_nom_completo', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">NOMBRE COMPLETO DEL AGRESOR</label>
                        <?php echo $this->Form->input('', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'disabled'=>true, 'id' => 'agresor_nom_completo', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">FECHA DE ATENCIÓNN</label>
                        <?php echo $this->Form->input('fecha_atencion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">FORMA DE ACCESO AL SERVICION</label>
                        <?php echo $this->Form->input('forma_ingreso_servicio', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">TIPOLOGÍA</label>
                        <?php echo $this->Form->input('tipologia', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">TIPO DE AGRESION</label>
                        <?php echo $this->Form->input('agresion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">TESTIMONIO DEL DENUNCIANTE</label>
                        <?php echo $this->Form->input('testimonio_denunciante', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">DESCRIPCIÓN DE LA DENUNCIA</label>
                        <?php echo $this->Form->input('descripcion_denuncia', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">PARENTESCO CON EL AGRESOR</label>
                        <?php echo $this->Form->input('parentesco_agresor', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">ACCIONES INMEDIATAS</label>
                        <?php echo $this->Form->input('acciones_inmediatas', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">ACCIONES COORDINADAS</label>
                        <?php echo $this->Form->input('acciones_coordinadas', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">FECHA DE RESULTADO</label>
                        <?php echo $this->Form->input('fecha_resultado', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">RESULTADOS OBTENIDOS</label>
                        <?php echo $this->Form->input('resultados_obtenidos', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <!-- <div class="form-group">
                        <label class="txt-shadow">CANTIDAD PAGINAS ADJUNTAS</label>
                        <?//php echo $this->Form->input('num_paginas_adjuntas', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false, 'maxlength'=>"3"] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">NOMBRE DEL FUNCIONARIO A CARGO DE LA ACCIÓN</label>
                        <?//php echo $this->Form->input('nombre_funcionario_accion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div> -->
                </fieldset>
                <div class="text-center">
                    <?= $this->Form->button(__('GUARDAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'type' => 'submit']) ?>
                </div>
            <?= $this->Form->end() ?>
        </div>
        <!-- /FORMULARIO DENUNCIA-->
  </div>
</div>

<script type="text/javascript">
    var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
    $(document).ready(function($) {
    $('#save-victima').click(function(event) {
            var data = $('#frm-victima').serialize();
            $.ajax({
                type: "POST",
                url: $('form#frm-victima').attr('action'),
                data: data,
                headers: {'X-CSRF-Token': csrfToken},
                beforeSend: function( data )
                {
                    $('#processing').modal('show');
                    $('div#loading').removeClass('invisible'); 
                },
                success:  function( data )
                {
                    $('#processing').modal('hide');
                    $('div#loading').addClass('invisible');
                    $('#data').html(data);
                    $('#victima_id').val($('#last_id').text());
                    $('#victima_nom_completo').val($('#victima_nombres').val()+' '+$('#victima_ap_paterno').val()+' '+$('#victima_ap_materno').val()+' de '+$('#victima_ap_casada').val() );
                    $('#profile-tab').focus();
                    $('#notification').delay(4500).fadeOut('slow');
                    $('#save-victima').prop( "disabled", true );
                }
            });
            return false;
        });

    $('#save-agresor').click(function(event) {
            var data = $('#frm-agresor').serialize();
            $.ajax({
                type: "POST",
                url: $('form#frm-agresor').attr('action'),
                data: data,
                headers: {'X-CSRF-Token': csrfToken},
                beforeSend: function( data )
                {
                    $('#processing').modal('show');
                    $('div#loading').removeClass('invisible');    
                },
                success:  function( data )
                {
                    $('#processing').modal('hide');
                    $('div#loading').addClass('invisible');
                    $('#data').html(data);
                    $('#agresor_id').val($('#last_id').text());
                    $('#agresor_nom_completo').val( $('#agresor_nombres').val()+' '+$('#agresor_ap_paterno').val()+' '+$('#agresorap_materno').val());
                    $('#contact-tab').focus();
                    $('#notification').delay(4500).fadeOut('slow');
                    $('#save-agresor').prop( "disabled", true );
                },
            });
            return false;
        });

    });

</script>



  <div class="modal fade" data-backdrop="static" id="processing">
    <div class="modal-dialog">
        <div class="text-center modal-content">
            <span><strong>Procesando...</strong></span><br>
            <?php echo $this->Html->image('loading.gif');?>
        </div>
    </div>
</div>
  