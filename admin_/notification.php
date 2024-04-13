<?php
	
	$flash = getFlashMessage();

	if (is_array($flash)) {
    $message = $flash['message'];
    $type = $flash['type'];
    
    if ($type === 'error') {
        echo "<div class='alert alert-danger alert-dismissible'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <i class='fas fa-exclamation-circle'></i> $message  </div>";
    } elseif ($type === 'success') {
        echo "<div class='alert alert-success alert-dismissible'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <i class='far fa-check-circle'></i> $message  </div>";
    }
} 
?>

 