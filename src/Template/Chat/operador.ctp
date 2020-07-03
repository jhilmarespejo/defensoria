
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
          url: "/defensoria/chat/mensajes/"+denunciate_id,
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
