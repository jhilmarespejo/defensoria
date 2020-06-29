<script>  
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;

  // function showMessage(messageHTML) {
  // $('#chat-box').append(messageHTML); }

  $(document).ready(function(){
        // var websocket = new WebSocket("ws://localhost:8090/defensoria/vendor/chatwebsocket/php-socket.php"); 
        // websocket.onopen = function(event) { 
        //   showMessage("<div class='chat-connection-ack'>Connection is established!</div>");   
        // }
        // websocket.onerror = function(event){
        //   showMessage("<div class='error'>Problem due to some Error</div>");
        // };
        // websocket.onclose = function(event){
        //   showMessage("<div class='chat-connection-ack'>Connection Closed</div>");
        // }; 
        // websocket.onmessage = function(event) {
        //   var Data = JSON.parse(event.data);
        //   showMessage("<div class='"+Data.message_type+"'>"+Data.message+"</div>");
        //   $('#chat-message').val('');
        // };
        

        
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
          //websocket.send(JSON.stringify(messageJSON));

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


  $('#btn-denunciante').click(function(event) {
      var data = { distrito: $('#distrito').val(), nombres: $('#nombres').val() };
      $.ajax({
          type: "post",
          url: "/defensoria/Denunciante/add",
          data: data,
          headers: {'X-CSRF-Token': csrfToken},
          beforeSend: function( data )
          {
            $('#msj_distrito').val($('#distrito option:selected').text())
            $('#msj_nombres').val($('#nombres').val())
            $('#msj_nombres').addClass('invisible')
            $('#msj_distrito').addClass('invisible')

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
          },
          success:  function( data )
          {
              $('#box_mensaje').removeClass('invisible')
              $('#box_denunciante').addClass('invisible')
              $('#msj_denunciante_id').val(data);
          }
      });
      return false;
  });

}); 

//var jq = jQuery.noConflict();

</script>
  <!-- <form name="frmChat" id="frmChat" class="invisible">
      <div id="chat-box"></div>
      <input type="text"  id="chat-district" required />
      <input type="text"  id="chat-user" required />
      <input type="text"  id="chat-message" required />
      <input type="submit" id="btnSend" name="send-chat-message" value="Send" >
  </form> -->




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
</div>

<div class="card text-center" id='box_denunciante' style="width: 20rem;position: fixed;bottom: 1%;right: 1%">
  <div class="card-body">
    <span><?php echo $this->Html->image('mariposa.png', ['alt' => 'SlimDNa', 'class' => 'chatlogo float-left' ]);?><h5 class="card-title float-righ">Bienvenido</h5></span>
    <h6 class="card-subtitle mb-2 text-muted float-left">Por favor indique su nombre y desde que distrito municipal se conecta</h6>
    <hr></hr>
      <!-- <?//php echo $this->Form->create('', ['url'=>['controller' => 'denunciante', 'action'=>'add'], 'id'=>'frm-denunciante', 'name'=>'frm-denunciante'] ); ?> -->
 
          <?php $options = [[ 'text' => 'Distrito municipal', 'value' => '', 'selected'],
          [ 'text' => 'Distrito 1 ', 'value' => '1'],
          [ 'text' => 'Distrito 2', 'value' => '2'],
          [ 'text' => 'Distrito 3', 'value' => '3'],
          [ 'text' => 'Distrito 4', 'value' => '4'],
          [ 'text' => 'Distrito 5', 'value' => '5'],
          [ 'text' => 'Distrito 6', 'value' => '6'],
          [ 'text' => 'Distrito 7', 'value' => '7'],
          [ 'text' => 'Distrito 8', 'value' => '8'],
          [ 'text' => 'Distrito 9', 'value' => '9'],
          [ 'text' => 'Distrito 10', 'value' => '10'],
          [ 'text' => 'Distrito 11', 'value' => '11'],
          [ 'text' => 'Distrito 12', 'value' => '12'],
          [ 'text' => 'Distrito 13', 'value' => '13'],
          [ 'text' => 'Distrito 14', 'value' => '14']]; ?>
        <?php echo $this->Form->input('nombres', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => 'Nombre', 'id'=>'nombres'] );?>
        <?php echo $this->Form->select('distrito', $options, ['label' => false, 'class'=>'form-control', 'id'=>'distrito']); ?>


        <!-- <?//php echo $this->Form->hidden("x.destino", ['value' => $destino ]);  ?> -->
        <div class="text-center">
              <?= $this->Form->button(__('GUARDAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'btn-denunciante', 'type'=>'button']) ?>
        </div>

    <!-- <?//= $this->Form->end() ?>    -->
    
  </div>
</div>