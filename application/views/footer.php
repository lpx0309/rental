<!--底部-->

<!--<nav class="navbar navbar-inverse navbar-default navbar-static-bottom" role="navigation">
</nav>-->

</body>
</html>

<script type="text/javascript">
$(document).ready(function(){
	$('img').error(function(){
		$(this).attr('src','<?php echo $this->config->base_url(); ?>public/images/noPic.jpg');					
	});	
});
</script>