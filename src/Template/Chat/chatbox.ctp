<?php 
// echo($denunciante_id);
// echo($nombres);
// echo($distrito);
// echo($plaforma);
if(isset($current_user)){
	//datos para el operador, from Mensagescontroller add
	
	$nombres = $current_user['username'];
	$de = 'Distrito '.$current_user['district'];
	//$para = ;
	$plataforma = $current_user['plataforma'];
} else{}
//pr($mensajes);
?>

<?php if(isset($mensajes)): ?>
	<div class="msg_history">
		<?php foreach ($mensajes as $mensaje): ?>

			<?php if ( is_numeric($mensaje->para) ){ ?>
				
				<div class="outgoing_msg">
					<div class="sent_msg">
						<p><?php echo $mensaje->mensaje; ?>
						<span class="time_date"> <?php echo date_format($mensaje->fechahora, 'Y-M-d H:i'); ?></span> 
						</p>
					</div>
				</div>
			<?php } else { ?>
				
				<div id="incoming_msg">
					<div class="incoming_msg_img"> <?php echo $this->Html->image('user.png'); ?>
						<span class="time_date"><?php echo $mensaje->nombres; ?></span>
					</div>
					<div class="received_msg"> 
						<div class="received_withd_msg">
								<p><?php echo $mensaje->mensaje; $para = $mensaje->de; ?>
								<span class="time_date"> <?php echo date_format($mensaje->fechahora, 'Y-M-d H:i'); ?></span>
							</p>
						</div>
					</div>
				</div>
			<?php }  ?>
		<?php 	endforeach; ?>
		<?php 
			if( !isset($current_user) ) {
				$nombres = $_SESSION['nombres'];
				$de = $_SESSION['de'];
				$para = $_SESSION['para'];;
				$plataforma = $_SESSION['plataforma'];
				$canal= $_SESSION['canal'];
			}else{$canal= $para; }
		?>
	</div>
	<!-- <div class="type_msg">
		<div class="input_msg_write"> -->
			<?php echo $this->Form->hidden('nombres', ['value'=>$nombres, 'id'=>'msj-nombres']);?>
			<?php echo $this->Form->hidden('de', ['value'=>$de , 'id'=>'msj-de']);?>
			<?php echo $this->Form->hidden('para', ['value'=>$para, 'id'=>'msj-para']);?>
			<?php echo $this->Form->hidden('plataforma', ['value'=>$plataforma, 'id'=>'msj-plataforma']);?>
			<?php echo $this->Form->hidden('canal', ['value'=>$canal, 'id'=>'msj-canal']);?>
			
			
			<!-- <?//php echo $this->Html->image('plane.png', ['alt' => '', 'id'=>'btn-mensaje', 'class' => 'plane msg_send_btn', 'url' => ['' => 'Chat', ''] ]);?> -->
		<!-- </div>
	</div> -->
	
<?php endif; ?>


<script type="text/javascript">
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
        });

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

    }
    	// setInterval(function(){
     //  		if( $('#msj-canal').val() ){
     //  			showmsg()
     //  		} else {
     //  			return false
     //  		}

    	// }, 4500);

    //linea que hace que se refreseque la pagina cada segundo



</script>


<?//php endif; ?>