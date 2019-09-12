<?php
//incluye la clase Libro y CrudLibro
require_once('../../model/sesion/conexion.php');
require_once('../../model/envases/crud_envases.php');
require_once('../../model/envases/envases.php');

$crud = new CrudEnvases();
$envase = new Envases();

$rpta = array();
$rpta = null;  

	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {        
        $envase->setReferencia($_POST["referencia"]);
        $envase->setDescripcion($_POST["descripcion"]); 
        $envase->setAccesorios($_POST["accesorios"]);   
        $envase->setCodUnidad($_POST["cod_unidad"]);    
        $envase->setUsos($_POST["usos"]);
        $envase->setCapacidadMm($_POST["capacidad_ml"]);
        $envase->setPesoG($_POST["peso_g"]);
        $envase->setDiametroMm($_POST["diametro_mm"]);
        $envase->setLargoMm($_POST["largo_mm"]);
        $envase->setAnchoMm($_POST["ancho_mm"]);
        $envase->setDiametroR($_POST["diametro_r"]);
        $envase->setAlturaR($_POST["altura_r"]);
        $envase->setColor($_POST["color"]);
        $envase->setMaterial($_POST["material"]);
        $envase->setPrecioUnd($_POST["precio_und"]);
        $envase->setContenidoPack($_POST["contenido_pack"]);
        $envase->setPrecioPack($_POST["precio_pack"]);
        $envase->setCodForma($_POST["cod_forma"]);  
        $envase->setCodLinea($_POST["cod_linea"]);   
        try{
            $crud->insertar($envase);
            $rpta["proceso"]="OK";	
	    }catch (PDOException $e) {
            $rpta["proceso"] = "ERROR";
            $rpta["mensaje"] = 'Falló la conexión: ' . $e->getMessage();
        }

        $json = json_encode( $rpta, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
        echo  $json; 
	}elseif(isset($_POST['actualizar'])){
        $envase->setReferencia($_POST["referencia"]);
        $envase->setDescripcion($_POST["descripcion"]); 
        $envase->setAccesorios($_POST["accesorios"]);   
        $envase->setCodUnidad($_POST["cod_unidad"]);    
        $envase->setUsos($_POST["usos"]);
        $envase->setCapacidadMm($_POST["capacidad_ml"]);
        $envase->setPesoG($_POST["peso_g"]);
        $envase->setDiametroMm($_POST["diametro_mm"]);
        $envase->setLargoMm($_POST["largo_mm"]);
        $envase->setAnchoMm($_POST["ancho_mm"]);
        $envase->setDiametroR($_POST["diametro_r"]);
        $envase->setAlturaR($_POST["altura_r"]);
        $envase->setColor($_POST["color"]);
        $envase->setMaterial($_POST["material"]);
        $envase->setPrecioUnd($_POST["precio_und"]);
        $envase->setContenidoPack($_POST["contenido_pack"]);
        $envase->setPrecioPack($_POST["precio_pack"]);
        $envase->setCodForma($_POST["cod_forma"]);  
        $envase->setCodLinea($_POST["cod_linea"]);  
        try{
            $crud->actualizar($envase);
            $rpta["proceso"]="OK";	
        }catch (PDOException $e) {
            $rpta["proceso"] = "ERROR";
            $rpta["mensaje"] = 'Falló la conexión: ' . $e->getMessage();
        }

        $json = json_encode( $rpta, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
        echo  $json; 
	}elseif ($_POST['accion'] == "eliminar") {
        try{
            $crud->eliminar($_POST["referencia"]);
            $rpta["proceso"] = "OK";	
	    }catch (PDOException $e) {
            $rpta["proceso"] = "ERROR";
            $rpta["mensaje"] = 'Falló la conexión: ' . $e->getMessage();
        }

        $json = json_encode( $rpta, JSON_UNESCAPED_UNICODE ); // GENERA EL JSON CON LOS DATOS OBTENIDOS  
        echo  $json; 	
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}
?>