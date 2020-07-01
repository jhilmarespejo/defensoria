<script>  
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;

   function showMessage(messageHTML) {
   $('#chat-box').append(messageHTML); }

  $(document).ready(function(){
      var websocket = new WebSocket("ws://192.168.100.29:8090/defensoria/vendor/chatwebsocket/php-socket.php"); 
      websocket.onopen = function(event) { 
        showMessage("<div class='chat-connection-ack'>Connection is established!</div>");   
      }
      websocket.onerror = function(event){
        showMessage("<div class='error'>Problem due to some Error</div>");
      };
      websocket.onclose = function(event){
        showMessage("<div class='chat-connection-ack'>Connection Closed</div>");
      }; 
      websocket.onmessage = function(event) {
        var Data = JSON.parse(event.data);
        showMessage("<div class='"+Data.message_type+"'>"+Data.message+"</div>");
        $('#chat-message').val('');
      };
        
      //var jq = jQuery.noConflict();
  $('#btn-mensaje').on("click",function(event){
        event.preventDefault();
        // // $('#chat-user').attr("type","hidden");  
        // // $('#chat-district').attr("type","hidden");    
        var mensajeJSON = {
          nombres: $('#msj-nombres').val(),
          distrito: $('#msj-distrito').val(),
          mensaje: $('#msj-mensaje').val(),
          denunciante_id: $('#msj-denunciante-id').val(),
          plataforma: $('#msj-plataforma').val(),
        };
        // websocket.send(JSON.stringify(messageJSON));

        $.ajax({
        type: "post",
        url: "/defensoria/Mensajes/add",
        data: mensajeJSON,
        headers: {'X-CSRF-Token': csrfToken},
        beforeSend: function( data )
        {
           $('#btn-mensaje').prop( "disabled", true );
        },
        success:  function( data )
        {
            $('#chat').html(data);
            $('#btn-mensaje').prop( "disabled", false );
            $('#msj-mensaje').val('');
        }
        });
        return false;
    });


  $('#btn-denunciante').click(function(event) {
      var data = { distrito: $('#distrito').val(), nombres: $('#nombres').val(), plataforma: $('#plataforma').val() };
      $.ajax({
          type: "post",
          url: "/defensoria/Denunciante/add",
          data: data,
          headers: {'X-CSRF-Token': csrfToken},
          beforeSend: function( data )
          {
            $('#msj-distrito').val($('#distrito option:selected').text())
            $('#msj-nombres').val($('#nombres').val())
            $('#msj-nombres').addClass('invisible')
            $('#msj-distrito').addClass('invisible')

            if($('#nombres').val()==''){
              $('#nombres').addClass('is-invalid');
              return false;
            } else{
              $('#nombres').removeClass('is-invalid');
            }
            if($('#distrito option:selected').val()==''){
              $('#distrito').addClass('is-invalid');
              return false;
            } else{
              $('#distrito').removeClass('is-invalid');
            }
            $('#btn-denunciante').prop( "disabled", true );
          },
          success:  function( data )
          {
              $('#box-mensaje').removeClass('invisible')
              $('#box-denunciante').addClass('invisible')
              $('#msj-denunciante-id').val(data);
              $('#btn-denunciante').prop( "disabled", false );
          }
      });
      return false;
  });

}); 

$(document).keypress(function(e) {
  var code = (e.keyCode ? e.keyCode : e.which);
    if(code == 13) { 
      $('#btn-mensaje').click();
    } 
}); 

</script>
  <!-- <form name="frmChat" id="frmChat" class="invisible">
      <div id="chat-box"></div>
      <input type="text"  id="chat-district" required />
      <input type="text"  id="chat-user" required />
      <input type="text"  id="chat-message" required />
      <input type="submit" id="btnSend" name="send-chat-message" value="Send" >
  </form> -->
<p id="chat"></p>

<div class="card text-center " id='box-mensaje' style="width: 20rem;position: fixed;bottom: 1%;right: 1%">
  <div class="card-body">
    <span><?php echo $this->Html->image('mariposa.png', ['alt' => 'SlimDNa', 'class' => 'chatlogo float-left' ]);?>
    <h6 class="card-title float-righ">Plataforma de atención <?php echo strtoupper($plataforma); ?></h6>
    <h5 class="card-title float-righ">Bienvenido</h5></span>
    <h6 class="card-subtitle mb-2 text-muted float-left"> ¿En que podemos ayudarle? </h6>
    <hr></hr>
        
        <?php echo $this->Form->hidden('denunciante_id', ['value'=>'', 'id'=>'msj-denunciante-id']);?>
        <?php echo $this->Form->hidden('distrito', ['value'=>'', 'id'=>'msj-distrito']);?>
        <?php echo $this->Form->hidden('nombres', ['value'=>'', 'id'=>'msj-nombres']);?>
        <?php echo $this->Form->hidden('plataforma', ['value'=>$plataforma, 'id'=>'msj-plataforma']);?>
        <?php echo $this->Form->input('mensaje', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'id'=>'msj-mensaje'] );?>

        <div class="text-center">
              <?= $this->Form->button(__('ENVIAR MENSAJE'), ['class' => 'btn btn-succes btn-primary btn-lg', 'id'=>'btn-mensaje', 'type'=>'button']) ?>
        </div>
  </div>
</div>

<!-- poner en visible -->
<div class="card text-center" id='box-denunciante  ' style="width: 20rem;position: fixed;bottom: 1%;right: 1%">
  <div class="card-body">
    <span><?php echo $this->Html->image('mariposa.png', ['alt' => 'SlimDNa', 'class' => 'chatlogo float-left' ]);?>
    <h6 class="card-title float-righ">Plataforma de atención <?php echo strtoupper($plataforma); ?></h6>
    <h5 class="card-title float-righ">Bienvenido</h5></span>
    <h6 class="card-subtitle mb-2 text-muted float-left">Por favor indique su nombre y desde que distrito municipal se conecta</h6>
    <hr></hr>
      <!-- <?//php echo $this->Form->create('', ['url'=>['controller' => 'denunciante', 'action'=>'add'], 'id'=>'frm-denunciante', 'name'=>'frm-denunciante'] ); ?> -->
  <?php if( $plataforma =='lgbt' ){ ?>
  <?php } ?>  
          <?php $options = [[ 'text' => 'Distrito municipal', 'value' => '', 'selected'],
          [ 'text' => 'Distrito 1 ', 'value' => '1'],
          [ 'text' => 'Distrito 2', 'value' => '2'],
          [ 'text' => 'Distrito 3', 'value' => '3'],
          [ 'text' => 'Distrito 4', 'value' => '4'],
          [ 'text' => 'Distrito 5', 'value' => '5'],
          [ 'text' => 'Distrito 6', 'value' => '6'],
          [ 'text' => 'Distrito 7', 'value' => '7'],
          [ 'text' => 'Distrito 8', 'value' => '8'],
          [ 'text' => 'Distrito 12', 'value' => '12'],
          [ 'text' => 'Distrito 14', 'value' => '14']]; ?>
        <?php echo $this->Form->input('nombres', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => 'Nombre', 'id'=>'nombres'] );?>
        <?php echo $this->Form->select('distrito', $options, ['label' => false, 'class'=>'form-control', 'id'=>'distrito']); ?>
        <?php echo $this->Form->hidden('plataforma', ['value'=>$plataforma, 'id'=>'plataforma']);?>

        <!-- <?//php echo $this->Form->hidden("x.destino", ['value' => $destino ]);  ?> -->
        <div class="text-center">
              <?= $this->Form->button(__('ENVIAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'btn-denunciante', 'type'=>'button']) ?>
        </div>

    <!-- <?//= $this->Form->end() ?>    -->
    
  </div>
</div>