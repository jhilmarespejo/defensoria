<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Victima $victima
*/
// pr($agresor);
?>

<!-- <div class="board row"> -->

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

    <!-- <div class=" col-xs-8 col-sm-8 col-md-8 col-lg-8"> -->
        <div id="carousel" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner">

                <!-- FORMULARIO VICTIMA-->
                <div class="carousel-item active"> 
                    <!-- <?= $this->Form->create($victima) ?> -->
                    <?php echo $this->Form->create('', ['url'=>['controller' => 'victima', 'action'=>'add'], 'id'=>'frm-victima'] ); ?>
                    <fieldset>
                        <legend ><h2 class="txt-shadow"><?= __('Nuevo Registro de Víctima') ?></h2></legend>
                        <hr>

                        <div class="row">
                            <div class="col-6 form-group">
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
                            <?php echo $this->Form->input('nombres', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>
                        <div class="form-group">
                            <label class="txt-shadow">APELLIDO PATERNO</label>
                            <?php echo $this->Form->input('ap_paterno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>
                        <div class="form-group">
                            <label class="txt-shadow">APELLIDO MATERNO</label>
                            <?php echo $this->Form->input('ap_materno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>
                        <!-- <div class="form-group">
                            <label class="txt-shadow">APELLIDO DE CASADA</label>
                            <?php echo $this->Form->input('ap_casada', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>

                        <div class="form-group">
                            <label class="txt-shadow">FECHA DE NACIMIENTO</label>
                            <?php echo $this->Form->input('fecha_nacimento', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>

                        <div class="row">
                            <div class="col-6 form-group">
                                <label class="txt-shadow">EDAD</label>
                                <?php echo $this->Form->input('edad', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
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
                        </div> -->
                        <?php       ?>
                    </fieldset>
                    <div class="text-center">
                        <?= $this->Form->button(__('GUARDAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'save-victima']) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div> 
                <!-- FORMULARIO VICTIMA--> 

                <!-- FORMULARIO AGRESOR-->
                <div class="carousel-item denuncia form">
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
                            <?php echo $this->Form->input('agresor.nombres', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>
                        <div class="form-group">
                            <label class="txt-shadow">APELLIDO MATERNO</label>
                            <?php echo $this->Form->input('agresor.ap_paterno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>
                        <div class="form-group">
                            <label class="txt-shadow">APELLIDO PATERNO</label>
                            <?php echo $this->Form->input('agresor.ap_materno', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>
                        <!-- <div class="form-group">
                            <label class="txt-shadow">APELLIDO DE CASADA</label>
                            <?php echo $this->Form->input('agresor.ap_casada', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>


                        <div class="form-group">
                            <label class="txt-shadow">FECHA DE NACIMIENTO</label>
                            <?php echo $this->Form->input('agresor.fecha_nacimento', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                        </div>
                        <div class="row">
                            <div class="col-6 form-group">
                                <label class="txt-shadow">EDAD</label>
                                <?php echo $this->Form->input('agresor.edad', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
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
                        </div> -->
                    </fieldset>
                    <div class="text-center">
                        <?= $this->Form->button(__('GUARDAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'save-agresor']) ?>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
                <!-- FORMULARIO AGRESOR-->


                <!-- FORMULARIO DENUNCIA-->
                <div class="carousel-item denuncia form">
                    
                <?= $this->Form->create($denuncium) ?>
                <fieldset>
                    <legend ><h2 class="txt-shadow"><?= __('Nuevo Registro de Denuncia') ?></h2></legend>
                    <hr>
                    <div class="form-group">
                        <label class="txt-shadow">victima_id</label>
                        <?php echo $this->Form->input('victima_id', ['options' => $victima_id], ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">agresor_id</label>
                        <?php echo $this->Form->input('agresor_id', ['options' => $agresor_id], ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
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
                    <div class="form-group">
                        <label class="txt-shadow">CANTIDAD PAGINAS ADJUNTAS</label>
                        <?php echo $this->Form->input('num_paginas_adjuntas', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false, 'maxlength'=>"3"] );?>
                    </div>
                    <div class="form-group">
                        <label class="txt-shadow">NOMBRE DEL FUNCIONARIO A CARGO DE LA ACCIÓN</label>
                        <?php echo $this->Form->input('nombre_funcionario_accion', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => '', 'required' => false] );?>
                    </div>
                </fieldset>
                <div class="text-center">
                    <?= $this->Form->button(__('GUARDAR'), ['class' => 'btn btn-warning btn-primary btn-lg']) ?>
                </div>
                <?= $this->Form->end() ?>
                </div>
                <!-- FORMULARIO DENUNCIA-->
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    <!-- </div> -->

<!-- </div>
 -->
<script type="text/javascript">
    $('.carousel').carousel({
        interval: false
    })
    jQuery(document).ready(function($) {
    $('#save-victima').change(function(event) {
            var data = [$(this).val()];

            $.ajax({
                type: "POST",
                url: $('form#frm-victima').attr('action'),
                data: {data},
                beforeSend: function( data )
                {
                    $('.success').removeClass('hidden')                    
                },
                success:  function( data )
                {
                    $('.success').removeClass('hidden')
                    $('#loading').addClass('hidden')
                    //$('#save-victima').html(data);
                },
            });
            return false;
        });

    $('#save-agresor').change(function(event) {
            var data = [$(this).val()];

            $.ajax({
                type: "POST",
                url: $('form#frm-agresor').attr('action'),
                data: {data},
                beforeSend: function( data )
                {
                    $('.success').removeClass('hidden')                    
                },
                success:  function( data )
                {
                    $('.success').removeClass('hidden')
                    $('#loading').addClass('hidden')
                    //$('#save-victima').html(data);
                },
            });
            return false;
        });

    });

</script>