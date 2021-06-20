<?php


namespace Orve\Entity;


class SicresOrigen
{
    private $codigoEntidadRegistral;
    private $decodificacionEntidadRegistral;
    private $numeroRegistroEntrada;
    private $fechaHoraEntrada;
    private $timeStampEntrada;
    private $codigoUnidadTratamicion;
    private $decodificacionUnidadTramitacion;

    /**
     * SicresOrigen constructor.
     * @param $codigoEntidadRegistral
     * @param $decodificacionEntidadRegistral
     * @param $numeroRegistroEntrada
     * @param $fechaHoraEntrada
     * @param $timeStampEntrada
     * @param $codigoUnidadTratamicion
     * @param $decodificacionUnidadTramitacion
     */
    public function __construct($codigoEntidadRegistral, $decodificacionEntidadRegistral, $numeroRegistroEntrada, $fechaHoraEntrada, $timeStampEntrada, $codigoUnidadTratamicion, $decodificacionUnidadTramitacion)
    {
        $this->codigoEntidadRegistral = $codigoEntidadRegistral;
        $this->decodificacionEntidadRegistral = $decodificacionEntidadRegistral;
        $this->numeroRegistroEntrada = $numeroRegistroEntrada;
        $this->fechaHoraEntrada = $fechaHoraEntrada;
        $this->timeStampEntrada = $timeStampEntrada;
        $this->codigoUnidadTratamicion = $codigoUnidadTratamicion;
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
    public function getNumeroRegistroEntrada()
    {
        return $this->numeroRegistroEntrada;
    }

    /**
     * @param mixed $numeroRegistroEntrada
     */
    public function setNumeroRegistroEntrada($numeroRegistroEntrada): void
    {
        $this->numeroRegistroEntrada = $numeroRegistroEntrada;
    }

    /**
     * @return mixed
     */
    public function getFechaHoraEntrada()
    {
        return $this->fechaHoraEntrada;
    }

    /**
     * @param mixed $fechaHoraEntrada
     */
    public function setFechaHoraEntrada($fechaHoraEntrada): void
    {
        $this->fechaHoraEntrada = $fechaHoraEntrada;
    }

    /**
     * @return mixed
     */
    public function getTimeStampEntrada()
    {
        return $this->timeStampEntrada;
    }

    /**
     * @param mixed $timeStampEntrada
     */
    public function setTimeStampEntrada($timeStampEntrada): void
    {
        $this->timeStampEntrada = $timeStampEntrada;
    }

    /**
     * @return mixed
     */
    public function getCodigoUnidadTratamicion()
    {
        return $this->codigoUnidadTratamicion;
    }

    /**
     * @param mixed $codigoUnidadTratamicion
     */
    public function setCodigoUnidadTratamicion($codigoUnidadTratamicion): void
    {
        $this->codigoUnidadTratamicion = $codigoUnidadTratamicion;
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