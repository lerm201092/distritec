<?php
	class Envases{
		private $referencia;
		private $descripcion;
        private $accesorios;
        private $cod_unidad;        
        private $usos;
        private $capacidad_ml;
        private $peso_g;
        private $diametro_mm;
        private $largo_mm;
        private $ancho_mm;
        private $diametro_r;
        private $altura_r;
        private $color;
        private $material;
        private $precio_und;
        private $contenido_pack;
        private $precio_pack;
        private $cod_forma;
        private $cod_linea;        

		function __construct(){}

		public function getReferencia()               { return $this->referencia;        }
		public function setReferencia($referencia)    { $this->referencia = $referencia; }

        public function getDescripcion()              { return $this->descripcion;         }
        public function setDescripcion($descripcion)  { $this->descripcion = $descripcion; }
        
        public function getAccesorios()               { return $this->accesorios;         }
        public function setAccesorios($accesorios)    { $this->accesorios = $accesorios;  }

        public function getCodUnidad()                { return $this->cod_unidad;         }
        public function setCodUnidad($cod_unidad)     { $this->cod_unidad = $cod_unidad;  }

        public function getUsos()                     { return $this->usos;                }
        public function setUsos($usos)                { $this->usos = $usos;               }

        public function getCapacidadMm()              { return $this->capacidad_ml;         }
        public function setCapacidadMm($capacidad_ml) { $this->capacidad_ml = $capacidad_ml; }

        public function getPesoG()                    { return $this->peso_g;              }
        public function setPesoG($peso_g)             { $this->peso_g = $peso_g;           }

        public function getDiametroMm()                { return $this->diametro_mm;         }
        public function setDiametroMm($diametro_mm)    { $this->diametro_mm = $diametro_mm; }

        public function getLargoMm()                    { return $this->largo_mm;         }
        public function setLargoMm($largo_mm)           { $this->largo_mm = $largo_mm;    }

        public function getAnchoMm()                    { return $this->ancho_mm;         }
        public function setAnchoMm($ancho_mm)           { $this->ancho_mm = $ancho_mm;    }

        public function getDiametroR()                  { return $this->diametro_r;        }
        public function setDiametroR($diametro_r)       { $this->diametro_r = $diametro_r; }

        public function getAlturaR()                    { return $this->altura_r;         }
        public function setAlturaR($altura_r)           { $this->altura_r = $altura_r;    }

        public function getColor()                      { return $this->color;            }
        public function setColor($color)                { $this->color = $color;          }

        public function getMaterial()                    { return $this->material;         }
        public function setMaterial($material)           { $this->material = $material;    }

        public function getPrecioUnd()                    { return $this->precio_und;        }
        public function setPrecioUnd($precio_und)         { $this->precio_und = $precio_und; }

        public function getContenidoPack()                 { return $this->contenido_pack;            }
        public function setContenidoPack($contenido_pack)  { $this->contenido_pack = $contenido_pack; }

        public function getPrecioPack()                    { return $this->precio_pack;         }
        public function setPrecioPack($precio_pack)        { $this->precio_pack = $precio_pack; }

        public function getCodForma()                      { return $this->cod_forma;         }
        public function setCodForma($cod_forma)            { $this->cod_forma = $cod_forma; }

        public function getCodLinea()                      { return $this->cod_linea;     }
        public function setCodLinea($cod_linea)            { $this->cod_linea = $cod_linea; }
	}
?>