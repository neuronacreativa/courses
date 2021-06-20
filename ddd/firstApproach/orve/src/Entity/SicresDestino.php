<?php


namespace Orve\Entity;


class SicresDestino
{
    private $codigoEntidadRegistral;
    private $decodificacionEntidadRegistral;
    private $codigoUnidadTramitacion;
    private $decodificacionUnidadTramitacion;

    /**
     * SicresDestino constructor.
     * @param $codigoEntidadRegistral
     * @param $decodificacionEntidadRegistral
     * @param $codigoUnidadTramitacion
     * @param $decodificacionUnidadTramitacion
     */
    public function __construct($codigoEntidadRegistral, $decodificacionEntidadRegistral, $codigoUnidadTramitacion, $decodificacionUnidadTramitacion)
    {
        $this->codigoEntidadRegistral = $codigoEntidadRegistral;
        $this->decodificacionEntidadRegistral = $decodificacionEntidadRegistral;
        $this->codigoUnidadTramitacion = $codigoUnidadTramitacion;
        $this->decodificacionUnidadTramitacion = $decodificacionUnidadTramitacion;
    }

    /**
     * @return mixed
     */
    public function getCodigoEntidadRegistral()
    {
        return $this->codigoEntidadRegistral;
    }

    /**
     * @param mixed $codigoEntidadRegistral
     */
    public function setCodigoEntidadRegistral($codigoEntidadRegistral): void
    {
        $this->codigoEntidadRegistral = $codigoEntidadRegistral;
    }

    /**
     * @return mixed
     */
    public function getDecodificacionEntidadRegistral()
    {
        return $this->decodificacionEntidadRegistral;
    }

    /**
     * @param mixed $decodificacionEntidadRegistral
     */
    public function setDecodificacionEntidadRegistral($decodificacionEntidadRegistral): void
    {
        $this->decodificacionEntidadRegistral = $decodificacionEntidadRegistral;
    }

    /**
     * @return mixed
     */
    public function getCodigoUnidadTramitacion()
    {
        return $this->codigoUnidadTramitacion;
    }

    /**
     * @param mixed $codigoUnidadTramitacion
     */
    public function setCodigoUnidadTramitacion($codigoUnidadTramitacion): void
    {
        $this->codigoUnidadTramitacion = $codigoUnidadTramitacion;
    }

    /**
     * @return mixed
     */
    public function getDecodificacionUnidadTramitacion()
    {
        return $this->decodificacionUnidadTramitacion;
    }

    /**
     * @param mixed $decodificacionUnidadTramitacion
     */
    public function setDecodificacionUnidadTramitacion($decodificacionUnidadTramitacion): void
    {
        $this->decodificacionUnidadTramitacion = $decodificacionUnidadTramitacion;
    }


}