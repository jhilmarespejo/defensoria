
<div id="mesgs" class="mesgs"> 
  
</div>
<div class="type_msg mesgs" id='box'>
    <div class="input_msg_write">
      <?php echo $this->Form->input('mensaje', ['label' => false,'id'=>'msj-mensaje', 'class'=>'write_msg', 'placeholder'=>'Escriba el mensaje', 'type' => 'text', 'value'=>'']);?>
      <?php echo $this->Html->image('plane.png', ['alt' => '', 'id'=>'btn-mensaje', 'class' => 'plane msg_send_btn', 'url' => ['' => 'Chat', ''] ]);?>
    </div>
  </div>

<script>  
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;

  $(document).ready(function(){
  $('#box').addClass('invisible');
  $('#btn-denunciante').click(function(event) {
      var data = { distrito: $('#distrito').val(), nombres: $('#nombres').val(), plataforma: $('#plataforma').val() };
      $.ajax({
          type: "post",
          url: "/defensoria/Denunciante/add",
          data: data,
          headers: {'X-CSRF-Token': csrfToken},
          beforeSend: function( data )
          {
            // $('#msj-distrito').val($('#distrito option:selected').text())
            // $('#msj-nombres').val($('#nombres').val())
            // $('#msj-nombres').addClass('invisible')
            // $('#msj-distrito').addClass('invisible')

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
              $('#btn-denunciante').prop( "disabled", false );
              $('#btn-mensaje').prop( "disabled", false );
              $('#box').removeClass('invisible');
              $('#mesgs').html(data);
          }
      });
      return false;
  });

  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
  $('#btn-mensaje').on("click",function(event){
          event.preventDefault();
          var mensaje = {
            nombres: $('#msj-nombres').val(),
            de: $('#msj-de').val(),
            para: $('#msj-para').val(),
            mensaje: $('#msj-mensaje').val(),
            plataforma: $('#msj-plataforma').val(),
            canal: $('#msj-canal').val(),
          };

          $.ajax({
            type: "post",
            url: "/defensoria/Mensajes/add",
            data: mensaje,
            headers: {'X-CSRF-Token': csrfToken},
            beforeSend: function( data )
            {
              $('#btn-mensaje').prop( "disabled", true );
              $('div#loading').removeClass('invisible');
              if($('#msj-mensaje').val()==''){
                $('#msj-mensaje').addClass('is-invalid');
                $('div#loading').addClass('invisible');
                return false;
              }
              else{
                $('#msj-mensaje').removeClass('is-invalid');
              }
            },
            success:  function( data )
            {
              $('#btn-mensaje').prop( "disabled", false );
              $('#msj-mensaje').val('');
              $('#mesgs').html('');
              $('#mesgs').html(data);
              $('.msg_history:last-child').focus();
              $('.msg_history').animate({scrollTop:$('#mesgs').height()+"px"});
              $('div#loading').addClass('invisible');
            }
          });
          return false;
  });//$('#btn-mensaje').on("click",function

  function showmsg(){
      var req = new XMLHttpRequest();

      req.onreadystatechange = function(){
        if (req.readyState == 4 && req.status == 200) {
          $('#mesgs').html('');
          $('#mesgs').html(req.responseText);
        }
      }
      var url='/defensoria/mensajes/msgs/'+ $('#msj-canal').val();
      req.open('GET', url, true);
      req.send();

  }//function showms()
  setInterval(function(){
    if( $('#msj-canal').val() ){
     // showmsg()
    } else {
      return false
    }

  }, 4500);

    //linea que hace que se refreseque la pagina cada segundo

}); 

// $(document).keypress(function(e) {
//   var code = (e.keyCode ? e.keyCode : e.which);
//   var t = $("#btn-mensaje").is(":enabled")
//     if(code == 13 && $("#btn-mensaje").is(":enabled") ) { 
//       $('#btn-mensaje').click();
//     } 
// }); 

    




</script>

<p id="chat"></p>


<div class="card text-center" id='box-denunciante' style="width: 20rem;position: fixed;bottom: 1%;right: 1%">
  <div class="card-body">
    <span><?php echo $this->Html->image('mariposa.png', ['alt' => 'SlimDNa', 'class' => 'chatlogo float-left' ]);?></span>
    <h6 class="card-title float-righ">Plataforma de atención <?php echo strtoupper($plataforma); ?></h6>
    <h5 class="card-title float-righ">Bienvenido</h5>
    <h6 class="card-subtitle mb-2 text-muted float-left">Por favor indique su nombre y desde que distrito municipal se conecta</h6>
        <?php echo $this->Form->input('nombres', ['label' => false, 'class'=>'form-control', 'type' => 'text', 'placeholder' => 'Nombre', 'id'=>'nombres'] );?>
        <?php echo $this->Form->hidden('plataforma', ['value'=>$plataforma, 'id'=>'plataforma']);?>


        <?php if($plataforma=='lgbt'): ?>
          <?php echo $this->Form->hidden('distrito', ['value'=>1, 'id'=>'distrito']);?>
        <?php else: ?>  
          <?php $options = [
            [ 'text' => 'Distrito municipal', 'value' => '', 'selected'],
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
          
          <?php echo $this->Form->select('distrito', $options, ['label' => false, 'class'=>'form-control', 'id'=>'distrito']); ?>
        <?php endif; ?> 
        


        <div class="text-center">
              <?= $this->Form->button(__('ENVIAR'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'btn-denunciante', 'type'=>'button']) ?>
        </div>
  </div>
</div>