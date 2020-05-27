<?php
	if(isset($_GET['err']) && !empty($_GET['err']) && is_numeric($_GET['err'])){
		http_response_code($_GET['err']);
	}
	else {
		http_response_code(404);
	}	
?>
