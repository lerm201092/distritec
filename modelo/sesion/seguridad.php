<?php
session_start();
if (@!$_SESSION['name_distritec']) {
	header('Location:../../../view/login.php');
}
?>	