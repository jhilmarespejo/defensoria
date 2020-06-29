<!-- 
<script>  
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
  $(document).ready(function(){
        
        $('#btn_mensaje').on("click",function(event){
          event.preventDefault();
          // $('#chat-user').attr("type","hidden");  
          // $('#chat-district').attr("type","hidden");    
          var mensajeJSON = {
            nombres: $('#msj_nombres').val(),
            distrito: $('#msj_distrito').val(),
            mensaje: $('#msj_mensaje').val(),
            denunciante_id: $('#msj_denunciante_id').val()
          };

          $.ajax({
          type: "post",
          url: "/defensoria/Mensajes/add",
          data: mensajeJSON,
          headers: {'X-CSRF-Token': csrfToken},
          beforeSend: function( data )
          {
          },
          success:  function( data )
          {
              $('#chat').html(data);
          }
          });
          return false;
        });

}); 

//var jq = jQuery.noConflict();

</script>

<p id="chat"></p>
<div class="card text-center invisible" id='box_mensaje' style="width: 20rem;position: fixed;bottom: 1%;right: 1%">
  <div class="card-body">
    <span><?php echo $this->Html->image('mariposa.png', ['alt' => 'SlimDNa', 'class' => 'chatlogo float-left' ]);?><h5 class="card-title float-righ">Bienvenido</h5></span>
    <h6 class="card-subtitle mb-2 text-muted float-left"> ¿En que podemos ayudarle? </h6>
    <hr></hr>
        
        <?php echo $this->Form->hidden('denunciante_id', ['value'=>'', 'id'=>'msj_denunciante_id']);?>
        <?php echo $this->Form->hidden('distrito', ['value'=>'', 'id'=>'msj_distrito']);?>
        <?php echo $this->Form->hidden('nombres', ['value'=>'', 'id'=>'msj_nombres']);?>
        <?php echo $this->Form->input('mensaje', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id'=>'msj_mensaje'] );?>

        <div class="text-center">
              <?= $this->Form->button(__('ENVIAR MENSAJE'), ['class' => 'btn btn-succes btn-primary btn-lg', 'id'=>'btn_mensaje', 'type'=>'button']) ?>
        </div>
  </div>
</div> -->

<?//php pr($mensajes['0']['de']); ?>




<!-- <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <?php foreach ($mensajes as $mensaje): ?>

          <li class="list-group-item"><strong><?= '('.h($mensaje->para).')-'.h($mensaje->nombres).':'; ?></strong> <?= h($mensaje->mensaje); ?> </li>

        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div> -->



<!-- <?php for ($i=0; $i<count($mensajes) ; $i++) { ?>
      <?php echo isset($mensajes[$i]->de)? $mensajes[$i]->de:''; ?>
      <?php if ( isset($mensajes[$i+1]) and $mensajes[$i+1]->de != $mensajes[$i]->de ) {?>
      <?php echo '<br>------'; } ?>
      <br>
    <?php } ?> -->


    <?//php pr($mensajes); ?>
      
<h4 class="text-center">Mensajes recientes</h4>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="<?php echo 'heading'.$i; ?>">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <?php echo h($mensajes[1]->fechahora) ?>
            </button>
        </div>
    <?php for ($i=1; $i<count($mensajes) ; $i++) { ?>

      <?php if ( isset($mensajes[$i-1]) and $mensajes[$i-1]->de != $mensajes[$i]->de ) {?>
        <div class="card-header" id="<?php echo 'heading'.$i; ?>">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <?php echo h($mensajes[$i]->fechahora) ?>
            </button>
        </div>
      <?php } ?>

        <div id="collapseTwo" class="collapse" aria-labelledby="<?php echo 'heading'.$i; ?>" data-parent="#accordion">
          <div class="card-body">
          <?php if(isset($mensajes[$i]->de)) {?>
            <li class="list-group-item"><strong><?= '('.h($mensajes[$i]->para).')-'.h($mensajes[$i]->nombres).':'; ?></strong> <?= h($mensajes[$i]->mensaje); ?> </li>
          <?php } ?>
          </div>
        </div>
  <?php } ?>
  </div>
</div>