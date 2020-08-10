
<div class="popover fade bs-popover-left show" role="tooltip" x-placement="left" style="top: 90px; left: -140px;width: 90%;">
	<div class="arrow" style="margin: 4.5rem 0; border-color: #ffeeba;"></div>
	<button type="button" class="close">X</button>
	<div class="popover-body" style="color: #856404; background-color: #fff3cd; border-color: #ffeeba; padding:1%;word-break: normal;border-radius: 5%;font-size: 15px;">ⓘ Si prefiere tambien puede realizar una llamada al n&uacute;mero: </br><strong style="font-size: 17px;">
		<a href="tel:<?= $officer['corporativo']?>"><?= $officer['corporativo']?></a></strong></div></div>


<a id="wplink" class="invisible" href="https://api.whatsapp.com/send?phone=+591<?= $officer['celular']?>&text=Mensaje para:%20<?= $officer['plataforma']?>%20D-<?= $officer['district']?>%20¿Pordria%20ayudarme?" target="blank"><?= $officer['celular']?></a>

<!-- <div class="text-center invisible alert alert-primary" role="alert" id="redirect">
  Enviando mensaje...
</div> -->
<script type="text/javascript">
$(document).ready(function(){
  
  $(function () {
    $('[data-toggle="popover"]').popover()
  })
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

	$(".close").click(function(){
		$(".popover").fadeOut(900);
	})

});

</script>