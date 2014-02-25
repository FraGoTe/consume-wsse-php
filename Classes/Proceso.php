<?php

/**
 * Description of Proceso
 *
 * @author fragote
 */
class Proceso {
    private $ANEXO;
    private $COD_IGEL;
    private $COD_MOD;
    private $DNI;
    private $ID_ANIO;
    private $ID_AREA;
    private $ID_GRADO;
    private $ID_NIVEL;
    private $ID_SECCION;
    
    public function getANEXO() {
        return $this->ANEXO;
    }

    public function getCOD_UGEL() {
        return $this->COD_IGEL;
    }

    public function getCOD_MOD() {
        return $this->COD_MOD;
    }

    public function getDNI() {
        return $this->DNI;
    }

    public function getID_ANIO() {
        return $this->ID_ANIO;
    }

    public function getID_AREA() {
        return $this->ID_AREA;
    }

    public function getID_GRADO() {
        return $this->ID_GRADO;
    }

    public function getID_NIVEL() {
        return $this->ID_NIVEL;
    }

    public function getID_SESSION() {
        return $this->ID_SECCION;
    }

    public function setANEXO($ANEXO) {
        $this->ANEXO = $ANEXO;
    }

    public function setCOD_UGEL($COD_UGEL) {
        $this->COD_IGEL = $COD_UGEL;
    }

    public function setCOD_MOD($COD_MOD) {
        $this->COD_MOD = $COD_MOD;
    }

    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    public function setID_ANIO($ID_ANIO) {
        $this->ID_ANIO = $ID_ANIO;
    }

    public function setID_AREA($ID_AREA) {
        $this->ID_AREA = $ID_AREA;
    }

    public function setID_GRADO($ID_GRADO) {
        $this->ID_GRADO = $ID_GRADO;
    }

    public function setID_NIVEL($ID_NIVEL) {
        $this->ID_NIVEL = $ID_NIVEL;
    }

    public function setID_SESSION($ID_SESSION) {
        $this->ID_SECCION = $ID_SESSION;
    }

}
