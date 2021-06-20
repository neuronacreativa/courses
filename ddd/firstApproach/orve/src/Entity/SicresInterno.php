<?php


namespace Orve\Entity;


class SicresInterno
{
    private $tipoTransporteEntrada;
    private $numeroTransporteEntrada;
    private $nombreUsuario;
    private $contactoUsuario;
    private $identificadorIntercambio;
    private $aplicacionVersionEmisora;
    private $tipoAnotacion;
    private $descripcionTipoAnotacion;
    private $tipoRegistro;
    private $documentacionFisica;
    private $observacionesApunte;
    private $indicadorPrueba;
    private $codigoEntidadRegistralInicio;
    private $decodificacionEntidadRegistralInicio;

    /**
     * SicresInterno constructor.
     * @param $tipoTransporteEntrada
     * @param $numeroTransporteEntrada
     * @param $nombreUsuario
     * @param $contactoUsuario
     * @param $identificadorIntercambio
     * @param $aplicacionVersionEmisora
     * @param $tipoAnotacion
     * @param $descripcionTipoAnotacion
     * @param $tipoRegistro
     * @param $documentacionFisica
     * @param $observacionesApunte
     * @param $indicadorPrueba
     * @param $codigoEntidadRegistralInicio
     * @param $decodificacionEntidadRegistralInicio
     */
    public function __construct($tipoTransporteEntrada, $numeroTransporteEntrada, $nombreUsuario, $contactoUsuario, $identificadorIntercambio, $aplicacionVersionEmisora, $tipoAnotacion, $descripcionTipoAnotacion, $tipoRegistro, $documentacionFisica, $observacionesApunte, $indicadorPrueba, $codigoEntidadRegistralInicio, $decodificacionEntidadRegistralInicio)
    {
        $this->tipoTransporteEntrada = $tipoTransporteEntrada;
        $this->numeroTransporteEntrada = $numeroTransporteEntrada;
        $this->nombreUsuario = $nombreUsuario;
        $this->contactoUsuario = $contactoUsuario;
        $this->identificadorIntercambio = $identificadorIntercambio;
        $this->aplicacionVersionEmisora = $aplicacionVersionEmisora;
        $this->tipoAnotacion = $tipoAnotacion;
        $this->descripcionTipoAnotacion = $descripcionTipoAnotacion;
        $this->tipoRegistro = $tipoRegistro;
        $this->documentacionFisica = $documentacionFisica;
        $this->observacionesApunte = $observacionesApunte;
        $this->indicadorPrueba = $indicadorPrueba;
        $this->codigoEntidadRegistralInicio = $codigoEntidadRegistralInicio;
        $this->decodificacionEntidadRegistralInicio = $decodificacionEntidadRegistralInicio;
    }

    /**
     * @return mixed
     */
    public function getTipoTransporteEntrada()
    {
        return $this->tipoTransporteEntrada;
    }

    /**
     * @param mixed $tipoTransporteEntrada
     */
    public function setTipoTransporteEntrada($tipoTransporteEntrada): void
    {
        $this->tipoTransporteEntrada = $tipoTransporteEntrada;
    }

    /**
     * @return mixed
     */
    public function getNumeroTransporteEntrada()
    {
        return $this->numeroTransporteEntrada;
    }

    /**
     * @param mixed $numeroTransporteEntrada
     */
    public function setNumeroTransporteEntrada($numeroTransporteEntrada): void
    {
        $this->numeroTransporteEntrada = $numeroTransporteEntrada;
    }

    /**
     * @return mixed
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * @param mixed $nombreUsuario
     */
    public function setNombreUsuario($nombreUsuario): void
    {
        $this->nombreUsuario = $nombreUsuario;
    }

    /**
     * @return mixed
     */
    public function getContactoUsuario()
    {
        return $this->contactoUsuario;
    }

    /**
     * @param mixed $contactoUsuario
     */
    public function setContactoUsuario($contactoUsuario): void
    {
        $this->contactoUsuario = $contactoUsuario;
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
    public function getAplicacionVersionEmisora()
    {
        return $this->aplicacionVersionEmisora;
    }

    /**
     * @param mixed $aplicacionVersionEmisora
     */
    public function setAplicacionVersionEmisora($aplicacionVersionEmisora): void
    {
        $this->aplicacionVersionEmisora = $aplicacionVersionEmisora;
    }

    /**
     * @return mixed
     */
    public function getTipoAnotacion()
    {
        return $this->tipoAnotacion;
    }

    /**
     * @param mixed $tipoAnotacion
     */
    public function setTipoAnotacion($tipoAnotacion): void
    {
        $this->tipoAnotacion = $tipoAnotacion;
    }

    /**
     * @return mixed
     */
    public function getDescripcionTipoAnotacion()
    {
        return $this->descripcionTipoAnotacion;
    }

    /**
     * @param mixed $descripcionTipoAnotacion
     */
    public function setDescripcionTipoAnotacion($descripcionTipoAnotacion): void
    {
        $this->descripcionTipoAnotacion = $descripcionTipoAnotacion;
    }

    /**
     * @return mixed
     */
    public function getTipoRegistro()
    {
        return $this->tipoRegistro;
    }

    /**
     * @param mixed $tipoRegistro
     */
    public function setTipoRegistro($tipoRegistro): void
    {
        $this->tipoRegistro = $tipoRegistro;
    }

    /**
     * @return mixed
     */
    public function getDocumentacionFisica()
    {
        return $this->documentacionFisica;
    }

    /**
     * @param mixed $documentacionFisica
     */
    public function setDocumentacionFisica($documentacionFisica): void
    {
        $this->documentacionFisica = $documentacionFisica;
    }

    /**
     * @return mixed
     */
    public function getObservacionesApunte()
    {
        return $this->observacionesApunte;
    }

    /**
     * @param mixed $observacionesApunte
     */
    public function setObservacionesApunte($observacionesApunte): void
    {
        $this->observacionesApunte = $observacionesApunte;
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
    public function getCodigoEntidadRegistralInicio()
    {
        return $this->codigoEntidadRegistralInicio;
    }

    /**
     * @param mixed $codigoEntidadRegistralInicio
     */
    public function setCodigoEntidadRegistralInicio($codigoEntidadRegistralInicio): void
    {
        $this->codigoEntidadRegistralInicio = $codigoEntidadRegistralInicio;
    }

    /**
     * @return mixed
     */
    public function getDecodificacionEntidadRegistralInicio()
    {
        return $this->decodificacionEntidadRegistralInicio;
    }

    /**
     * @param mixed $decodificacionEntidadRegistralInicio
     */
    public function setDecodificacionEntidadRegistralInicio($decodificacionEntidadRegistralInicio): void
    {
        $this->decodificacionEntidadRegistralInicio = $decodificacionEntidadRegistralInicio;
    }


}