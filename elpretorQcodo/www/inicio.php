<?php
// Include prepend.inc to load Qcodo
require(dirname(__FILE__) . '/../includes/prepend.inc.php');

// Security check for ALLOW_REMOTE_ADMIN
// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
QApplication::CheckRemoteAdmin();

class Inicio extends QForm {
	
}


Inicio::Run('Inicio');

?>