<?php
	session_start();
	if (@$_SESSION['name_distritec']) {
		header('Location:./../admin/view/envases/');
	}
?>	