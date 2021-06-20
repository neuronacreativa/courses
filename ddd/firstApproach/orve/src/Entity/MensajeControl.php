<?php


namespace Orve\Entity;


class MensajeControl
{
    private $codigoEntidadRegistralOrigen;
    private $codigoEntidadRegistralDestino;
    private $identificadorIntercambio;
    private $tipoMensaje;
    private $descripcionMensaje;
    private $numeroRegistroEntradaDestino;
    private $fechaHoraEntradaDestino;
    private $indicadorPrueba;
    private $identificadorFichero;
    private $codigoError;

    /**
     * MensajeControl constructor.
     * @param $codigoEntidadRegistralOrigen
     * @param $codigoEntidadRegistralDestino
     * @param $identificadorIntercambio
     * @param $tipoMensaje
     * @param $descripcionMensaje
     * @param $numeroRegistroEntradaDestino
     * @param $fechaHoraEntradaDestino
     * @param $indicadorPrueba
     * @param $identificadorFichero
     * @param $codigoError
     */
    public function __construct($codigoEntidadRegistralOrigen, $codigoEntidadRegistralDestino, $identificadorIntercambio, $tipoMensaje, $descripcionMensaje, $numeroRegistroEntradaDestino, $fechaHoraEntradaDestino, $indicadorPrueba, $identificadorFichero, $codigoError)
    {
        $this->codigoEntidadRegistralOrigen = $codigoEntidadRegistralOrigen;
        $this->codigoEntidadRegistralDestino = $codigoEntidadRegistralDestino;
        $this->identificadorIntercambio = $identificadorIntercambio;
        $this->tipoMensaje = $tipoMensaje;
        $this->descripcionMensaje = $descripcionMensaje;
        $this->numeroRegistroEntradaDestino = $numeroRegistroEntradaDestino;
        $this->fechaHoraEntradaDestino = $fechaHoraEntradaDestino;
        $this->indicadorPrueba = $indicadorPrueba;
        $this->identificadorFichero = $identificadorFichero;
        $this->codigoError = $codigoError;
    }

    /**
     * @return mixed
     */
    public function getCodigoEntidadRegistralOrigen()
    {
        return $this->codigoEntidadRegistralOrigen;
    }

    /**
     * @param mixed $codigoEntidadRegistralOrigen
     */
    public function setCodigoEntidadRegistralOrigen($codigoEntidadRegistralOrigen): void
    {
        $this->codigoEntidadRegistralOrigen = $codigoEntidadRegistralOrigen;
    }

    /**
     * @return mixed
     */
    public function getCodigoEntidadRegistralDestino()
    {
        return $this->codigoEntidadRegistralDestino;
    }

    /**
     * @param mixed $codigoEntidadRegistralDestino
     */
    public function setCodigoEntidadRegistralDestino($codigoEntidadRegistralDestino): void
    {
        $this->codigoEntidadRegistralDestino = $codigoEntidadRegistralDestino;
    }

    /**
     * @return mixed
     */
    public function getIdentificadorIntercambio()
    {
        return $this->identificadorIntercambio;
    }

    /**
     * @param mixed $identificadorIntercambio
     */
    public function setIdentificadorIntercambio($identificadorIntercambio): void
    {
        $this->identificadorIntercambio = $identificadorIntercambio;
    }

    /**
     * @return mixed
     */
    public function getTipoMensaje()
    {
        return $this->tipoMensaje;
    }

    /**
     * @param mixed $tipoMensaje
     */
    public function setTipoMensaje($tipoMensaje): void
    {
        $this->tipoMensaje = $tipoMensaje;
    }

    /**
     * @return mixed
     */
    public function getDescripcionMensaje()
    {
        return $this->descripcionMensaje;
    }

    /**
     * @param mixed $descripcionMensaje
     */
    public function setDescripcionMensaje($descripcionMensaje): void
    {
        $this->descripcionMensaje = $descripcionMensaje;
    }

    /**
     * @return mixed
     */
    public function getNumeroRegistroEntradaDestino()
    {
        return $this->numeroRegistroEntradaDestino;
    }

    /**
     * @param mixed $numeroRegistroEntradaDestino
     */
    public function setNumeroRegistroEntradaDestino($numeroRegistroEntradaDestino): void
    {
        $this->numeroRegistroEntradaDestino = $numeroRegistroEntradaDestino;
    }

    /**
     * @return mixed
     */
    public function getFechaHoraEntradaDestino()
    {
        return $this->fechaHoraEntradaDestino;
    }

    /**
     * @param mixed $fechaHoraEntradaDestino
     */
    public function setFechaHoraEntradaDestino($fechaHoraEntradaDestino): void
    {
        $this->fechaHoraEntradaDestino = $fechaHoraEntradaDestino;
    }

    /**
     * @return mixed
     */
    public function getIndicadorPrueba()
    {
        return $this->indicadorPrueba;
    }

    /**
     * @param mixed $indicadorPrueba
     */
    public function setIndicadorPrueba($indicadorPrueba): void
    {
        $this->indicadorPrueba = $indicadorPrueba;
    }

    /**
     * @return mixed
     */
    public function getIdentificadorFichero()
    {
        return $this->identificadorFichero;
    }

    /**
     * @param mixed $identificadorFichero
     */
    public function setIdentificadorFichero($identificadorFichero): void
    {
        $this->identificadorFichero = $identificadorFichero;
    }

    /**
     * @return mixed
     */
    public function getCodigoError()
    {
        return $this->codigoError;
    }

    /**
     * @param mixed $codigoError
     */
    public function setCodigoError($codigoError): void
    {
        $this->codigoError = $codigoError;
    }


}