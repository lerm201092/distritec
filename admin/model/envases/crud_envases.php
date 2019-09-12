<?php
	class CrudEnvases{
		// constructor de la clase
		public function __construct(){}

					// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerEnvase($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM ENVASES WHERE REFERENCIA = :referencia');
			$select->bindValue('referencia',$id);
			$select->execute();
			$envase   = $select->fetch();

			$myEnvase = new Envases();
			$myEnvase->setReferencia($envase["referencia"]);
			$myEnvase->setDescripcion($envase["descripcion"]);
			$myEnvase->setAccesorios($envase["accesorios"]);
			$myEnvase->setCodUnidad($envase["cod_unidad"]);
			$myEnvase->setUsos($envase["usos"]);
			$myEnvase->setCapacidadMm($envase["capacidad_ml"]);
			$myEnvase->setPesoG($envase["peso_g"]);
			$myEnvase->setDiametroMm($envase["diametro_mm"]);
			$myEnvase->setLargoMm($envase["largo_mm"]);
			$myEnvase->setAnchoMm($envase["ancho_mm"]);
			$myEnvase->setDiametroR($envase["diametro_r"]);
			$myEnvase->setAlturaR($envase["altura_r"]);
			$myEnvase->setColor($envase["color"]);
			$myEnvase->setMaterial($envase["material"]);       
			$myEnvase->setPrecioUnd($envase["precio_und"]);
			$myEnvase->setContenidoPack($envase["contenido_pack"]);
			$myEnvase->setPrecioPack($envase["precio_pack"]);      
			$myEnvase->setCodForma($envase["cod_forma"]);          
			$myEnvase->setCodLinea($envase["cod_linea"]);

			return $myEnvase;
		}


		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($envase){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO ENVASES (REFERENCIA, DESCRIPCION, ACCESORIOS, 
											  COD_UNIDAD, USOS, CAPACIDAD_ML, 
											  PESO_G, DIAMETRO_MM, LARGO_MM,
											  ANCHO_MM, DIAMETRO_R, ALTURA_R,
											  COLOR, MATERIAL, PRECIO_UND, CONTENIDO_PACK,
											  PRECIO_PACK, COD_FORMA, COD_LINEA) 
								 VALUES (:referencia, :descripcion, 
										 :accesorios,  :cod_unidad, 
										 :usos,        :capacidad_ml,
										 :peso_g ,     :diametro_mm , 
										 :largo_mm ,    :ancho_mm,
										 :diametro_r ,  :altura_r, 
										 :color,       :material,  
										 :precio_und,  :contenido_pack, 
										 :precio_pack, :cod_forma,  
										 :cod_linea)');
			$insert->bindValue('referencia',$envase->getReferencia());
			$insert->bindValue('descripcion',$envase->getDescripcion());
			$insert->bindValue('accesorios',$envase->getAccesorios());
			$insert->bindValue('cod_unidad',$envase->getCodUnidad());
			$insert->bindValue('usos',$envase->getUsos());
			$insert->bindValue('capacidad_ml',$envase->getCapacidadMm());
			$insert->bindValue('peso_g',$envase->getPesoG());
			$insert->bindValue('diametro_mm',$envase->getDiametroMm());
			$insert->bindValue('largo_mm',$envase->getLargoMm());
			$insert->bindValue('ancho_mm',$envase->getAnchoMm());
			$insert->bindValue('diametro_r',$envase->getDiametroR());
			$insert->bindValue('altura_r',$envase->getAlturaR());
			$insert->bindValue('color',$envase->getColor());
			$insert->bindValue('material',$envase->getMaterial());
			$insert->bindValue('precio_und',$envase->getPrecioUnd());
			$insert->bindValue('contenido_pack',$envase->getContenidoPack());
			$insert->bindValue('precio_pack',$envase->getPrecioPack());
			$insert->bindValue('cod_forma',$envase->getCodForma());
			$insert->bindValue('cod_linea',$envase->getCodLinea());
			$insert->execute();
		}

		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaEnvases=[];
			$select=$db->query('SELECT * FROM ENVASES');

			foreach($select->fetchAll() as $envase){
				$myLibro= new Envases();
				$myLibro->setReferencia($envase['referencia']);
				$myLibro->setDescripcion($envase['descripcion']);
				$myLibro->setUsos($envase['usos']);
				$myLibro->setColor($envase['color']);
				$listaEnvases[]=$myLibro;
			}
			return $listaEnvases;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM ENVASES WHERE REFERENCIA=:referencia');
			$eliminar->bindValue('referencia',$id);
			$eliminar->execute();
		}


		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($envase){
			$db=Db::conectar();
			$id = $envase->getReferencia();
			$actualizar=$db->prepare('UPDATE ENVASES SET DESCRIPCION=:descripcion, 
														 ACCESORIOS=:accesorios, COD_UNIDAD=:cod_unidad, 
														 USOS=:usos, CAPACIDAD_ML=:capacidad_ml,
														 PESO_G=:peso_g, DIAMETRO_MM=:diametro_mm, 
														 LARGO_MM=:largo_mm, ANCHO_MM=:ancho_mm, 
														 DIAMETRO_R=:diametro_r, ALTURA_R=:altura_r,
														 COLOR=:color, MATERIAL=:material, 
														 PRECIO_UND=:precio_und, CONTENIDO_PACK=:contenido_pack, 
														 PRECIO_PACK=:precio_pack, COD_FORMA=:cod_forma, COD_LINEA=:cod_linea 
									  WHERE REFERENCIA = "'.$id.'"'); 
		
			$actualizar->bindValue('descripcion',$envase->getDescripcion());
			$actualizar->bindValue('accesorios',$envase->getAccesorios());
			$actualizar->bindValue('cod_unidad',$envase->getCodUnidad());
			$actualizar->bindValue('usos',$envase->getUsos());
			$actualizar->bindValue('capacidad_ml',$envase->getCapacidadMm());
			$actualizar->bindValue('peso_g',$envase->getPesoG());
			$actualizar->bindValue('diametro_mm',$envase->getDiametroMm());
			$actualizar->bindValue('largo_mm',$envase->getLargoMm());
			$actualizar->bindValue('ancho_mm',$envase->getAnchoMm());
			$actualizar->bindValue('diametro_r',$envase->getDiametroR());
			$actualizar->bindValue('altura_r',$envase->getAlturaR());
			$actualizar->bindValue('color',$envase->getColor());
			$actualizar->bindValue('material',$envase->getMaterial());
			$actualizar->bindValue('precio_und',$envase->getPrecioUnd());
			$actualizar->bindValue('contenido_pack',$envase->getContenidoPack());
			$actualizar->bindValue('precio_pack',$envase->getPrecioPack());
			$actualizar->bindValue('cod_forma',$envase->getCodForma());
			$actualizar->bindValue('cod_linea',$envase->getCodLinea());
		    $actualizar->execute();

		}
	}
?>