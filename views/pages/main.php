<?php
#recuperar el perfil al que pertenece
$perfil = $_SESSION['perfil'];

if ( isset($_GET['menu']) ) {
	$menu = $_GET['menu'];

	switch ($perfil) {
		case 'ADMIN':
			switch ($menu) {
				
				case 'general':#
					include 'view/pages/uaa/content_header/header_add_personal.php';
					include 'view/pages/uaa/content_main/content_add_personal.php';
					break;
				default:
					include 'view/pages/uaa/content_header/header_error.php';
					include 'view/pages/uaa/content_main/content_error.php';
					break;
			}
			break;
		default:
			include 'view/pages/uaa/content_header/header_error.php';
			include 'view/pages/uaa/content_main/content_error.php';
			break;
	}
}
?>