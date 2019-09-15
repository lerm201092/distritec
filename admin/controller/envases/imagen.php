<?php
print_r($_POST["rutaImagen"]);
move_uploaded_file($_POST["rutaImagen"], "./");