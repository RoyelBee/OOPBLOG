<?php 
	 function formatDateTime($time){
		return date('F, j, Y, g:i a', strtotime($time));
	}

?>