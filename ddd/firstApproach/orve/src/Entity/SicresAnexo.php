<?php


namespace Orve\Entity;


class SicresAnexo
{
    private $nombreFicheroAnexado;
    private $identificadorFichero;
    private $validezDocumento;
    private $tipoDocumento;
    private $certificado;
    private $firmaDocumento;
    private $timestamp;
    private $validacionOCSPCertificado;
    private $hash;
    private $tipoMIME;
    private $anexo;
    private $identificadorDocumentoFirmado;
    private $observaciones;

    /**
     * SicresAnexo constructor.
     * @param $nombreFicheroAnexado
     * @param $identificadorFichero
     * @param $validezDocumento
     * @param $tipoDocumento
     * @param $certificado
     * @param $firmaDocumento
     * @param $timestamp
     * @param $validacionOCSPCertificado
     * @param $hash
     * @param $tipoMIME
     * @param $anexo
     * @param $identificadorDocumentoFirmado
     * @param $observaciones
     */
    public function __construct($nombreFicheroAnexado, $identificadorFichero, $validezDocumento, $tipoDocumento, $certificado, $firmaDocumento, $timestamp, $validacionOCSPCertificado, $hash, $tipoMIME, $anexo, $identificadorDocumentoFirmado, $observaciones)
    {
        $this->nombreFicheroAnexado = $nombreFicheroAnexado;
        $this->identificadorFichero = $identificadorFichero;
        $this->validezDocumento = $validezDocumento;
        $this->tipoDocumento = $tipoDocumento;
        $this->certificado = $certificado;
        $this->firmaDocumento = $firmaDocumento;
        $this->timestamp = $timestamp;
        $this->validacionOCSPCertificado = $validacionOCSPCertificado;
        $this->hash = $hash;
        $this->tipoMIME = $tipoMIME;
        $this->anexo = $anexo;
        $this->identificadorDocumentoFirmado = $identificadorDocumentoFirmado;
        $this->observaciones = $observaciones;
    }

    /**
     * @return mixed
     */
    public function getAnexo()
    {
        return $this->anexo;
    }

    /**
     * @param mixed $anexo
     */
    public function setAnexo($anexo): void
    {
        $this->anexo = $anexo;
    }

    /**
     * @return mixed
     */
    public function getIdentificadorDocumentoFirmado()
    {
        return $this->identificadorDocumentoFirmado;
    }

    /**
     * @param mixed $identificadorDocumentoFirmado
     */
    public function setIdentificadorDocumentoFirmado($identificadorDocumentoFirmado): void
    {
        $this->identificadorDocumentoFirmado = $identificadorDocumentoFirmado;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param mixed $observaciones
     */
    public function setObservaciones($observaciones): void
    {
        $this->observaciones = $observaciones;
    }


    /**
     * @return mixed
     */
    public function getNombreFicheroAnexado()
    {
        return $this->nombreFicheroAnexado;
    }

    /**
     * @param mixed $nombreFicheroAnexado
     */
    public function setNombreFicheroAnexado($nombreFicheroAnexado): void
    {
        $this->nombreFicheroAnexado = $nombreFicheroAnexado;
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
    public function getValidezDocumento()
    {
        return $this->validezDocumento;
    }

    /**
     * @param mixed $validezDocumento
     */
    public function setValidezDocumento($validezDocumento): void
    {
        $this->validezDocumento = $validezDocumento;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * @param mixed $tipoDocumento
     */
    public function setTipoDocumento($tipoDocumento): void
    {
        $this->tipoDocumento = $tipoDocumento;
    }

    /**
     * @return mixed
     */
    public function getCertificado()
    {
        return $this->certificado;
    }

    /**
     * @param mixed $certificado
     */
    public function setCertificado($certificado): void
    {
        $this->certificado = $certificado;
    }

    /**
     * @return mixed
     */
    public function getFirmaDocumento()
    {
        return $this->firmaDocumento;
    }

    /**
     * @param mixed $firmaDocumento
     */
    public function setFirmaDocumento($firmaDocumento): void
    {
        $this->firmaDocumento = $firmaDocumento;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getValidacionOCSPCertificado()
    {
        return $this->validacionOCSPCertificado;
    }

    /**
     * @param mixed $validacionOCSPCertificado
     */
    public function setValidacionOCSPCertificado($validacionOCSPCertificado): void
    {
        $this->validacionOCSPCertificado = $validacionOCSPCertificado;
    }

    /**
     * @return mixed
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param mixed $hash
     */
    public function setHash($hash): void
    {
        $this->hash = $hash;
    }

    /**
     * @return mixed
     */
    public function getTipoMIME()
    {
        return $this->tipoMIME;
    }

    /**
     * @param mixed $tipoMIME
     */
    public function setTipoMIME($tipoMIME): void
    {
        $this->tipoMIME = $tipoMIME;
    }


}