
<?php

//pr($mensajes);?>

<div class="container">
<h3 class=" text-center">Mensajes</h3>
<div class="messaging">
      <div class="inbox_msg">


        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recientes</h4>
            </div>
          </div>
          <div class="inbox_chat">
          <?php foreach($denunciantes as $denunciante):?>
            <a id="<?=$denunciante->de; ?>" class='from' href="#">
             <?php echo $this->Form->hidden('de', ['value'=>$denunciante->de, 'id'=>"denunciate-id-$denunciante->de"]);?>
              <div class="chat_list">
                <div class="chat_people">
                  <div class="chat_img"><?php echo $this->Html->image('user.png'); ?> </div>
                  <div class="chat_ib">
                    <h5><?php echo $denunciante->nombres; ?> <br/><span class="chat_date"><?php echo date_format($denunciante->fechahora, 'Y-M-d'); ?></span></h5>
                  </div>
                </div>
              </div>
            </a>

          <?php endforeach; ?>
          </div>
        </div>


        <div id="mesgs" class="mesgs"> </div>

        <div class="type_msg mesgs" id='box'>
          <div class="input_msg_write">
            <?php echo $this->Form->input('mensaje', ['label' => false,'id'=>'msj-mensaje', 'class'=>'write_msg', 'placeholder'=>'Escriba el mensaje', 'type' => 'text', 'value'=>'']);?>
            <?php echo $this->Html->image('plane.png', ['alt' => '', 'id'=>'btn-mensaje', 'class' => 'plane msg_send_btn', 'url' => ['' => 'Chat', ''] ]);?>
          </div> 
        </div>


      </div>
</div>
</div>

<script>  
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
  $(document).ready(function(){
        $('.from').on("click",function(event){
          denunciate_id=$(this).attr('id');
          event.preventDefault();
          
          $.ajax({
          type: "post",
          url: "/defensoria/Mensajes/msgs/"+denunciate_id,
          data: {de: $('#denunciate-id'+denunciate_id).val()},
          headers: {'X-CSRF-Token': csrfToken},
          beforeSend: function( data )
          {
            $('#processing').modal('show');
            $('div#loading').removeClass('invisible'); 
          },
          success:  function( data )
          {
              $(this).children().addClass('active_chat');
              $('#processing').modal('hide');
              $('div#loading').addClass('invisible');
              $('#mesgs').html(data);
              
          }
          });
          return false;
        });

//send messages
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
              }else{
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
     //showmsg()
    } else {
      return false
    }

  }, 4500);

        

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
