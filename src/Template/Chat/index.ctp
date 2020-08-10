



<script>  
  var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;

  $(document).ready(function(){

  $('#distrito').change(function(event) {
      var data = { distrito: $('#distrito').val(), nombres: $('#nombres').val(), plataforma: $('#plataforma').val() };
      $.ajax({
          type: "post",
          url: "/defensoria/Chat/findnumber",
          data: data,
          headers: {'X-CSRF-Token': csrfToken},
          beforeSend: function( data )
          {

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
              $('#gif-send').removeClass('invisible')
            }
            //$('#btn-denunciante').prop( "disabled", true );
          },
          success:  function( data )
          {
              //$('#btn-denunciante').prop( "disabled", false );
              $('#gif-send').addClass('invisible')
              $('#mesgs').html(data);
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
            // $('#msj-distrito').val($('#distrito option:selected').text())
            // $('#msj-nombres').val($('#nombres').val())
            // $('#msj-nombres').addClass('invisible')
             $('#gif-send').removeClass('invisible')

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
            //$('#btn-denunciante').prop( "disabled", true );
          },
          success:  function( data )
          {
              //$('#box-mensaje').removeClass('invisible')
              //$('#box-denunciante').addClass('invisible')
            //$('#btn-denunciante').prop( "disabled", false );
             // $('#btn-mensaje').prop( "disabled", false );
              //$('#box').removeClass('invisible');
              $('#gif-send').addClass('invisible');
              window.location = $('#wplink').attr('href');

              //$('#wplink').trigger( "click" );
              $('#mesgs').html(data);
          }
      });
      return false;
  });

}); 

</script>



<div class="card text-center" id='box-denunciante' style="width: 20rem;position: fixed;bottom: 1%;right: 1%">
  <div class="card-body">
    <span><?php echo $this->Html->image('mariposa.png', ['alt' => 'SlimDNa', 'class' => 'chatlogo float-left' ]);?>
      
      <?php echo $this->Html->image('send.gif', ['alt' => '', 'id'=>'gif-send', 'style' => 'position:absolute;width:30%;right:0;top:11px', 'class' => 'invisible' ]);?>
    </span>
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
            <span id="mesgs"></span>

        <?php endif; ?> 
        


        <div class="text-center">
              <?= $this->Form->button(__('ENVIAR MENSAJE'), ['class' => 'btn btn-warning btn-primary btn-lg', 'id'=>'btn-denunciante', 'type'=>'button']) ?>
        </div>
  </div>
</div>
