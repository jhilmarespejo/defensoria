<h1 class="headd">Response from server:</h1>
<div id="xresponse"></div>

<script type="text/javascript">



//initialize jQuery

$(document).ready(function(){
	$('.headd').click(function() {
		getContent();
	})
	
	function getContent(timestamp)
	{
	    var queryString = {'timestamp' : timestamp};
	    $.ajax(
	        {
	            type: 'GET',
	            url: '/defensoria/mensajes/one',
	            data: queryString,
	            success: function(data){
	                // put result data into "obj"
	                var obj = jQuery.parseJSON(data);
	                // put the data_from_file into #response
	                console.log('ddd');
	                $('#xresponse').html();
	                $('#xresponse').html(obj.data_from_file);
	                // call the function again, this time with the timestamp we just got from server.php
	                getContent(obj.timestamp);
	            }
	        }
	    );
	}
	  
 	//$(function() { getContent(); });
 //setTimeout(function() { }, 2000);
});	



</script>