<?php


namespace Orve\Entity;


class SicresAsunto
{
    private $resument;
    private $codigoAsunto;
    private $referenciaExterna;
    private $numeroExpediente;

    /**
     * SicresAsunto constructor.
     * @param $resument
     * @param $codigoAsunto
     * @param $referenciaExterna
     * @param $numeroExpediente
     */
    public function __construct($resument, $codigoAsunto, $referenciaExterna, $numeroExpediente)
    {
        $this->resument = $resument;
        $this->codigoAsunto = $codigoAsunto;
        $this->referenciaExterna = $referenciaExterna;
        $this->numeroExpediente = $numeroExpediente;
    }

    /**
     * @return mixed
     */
    public function getResument()
    {
        return $this->resument;
    }

    /**
     * @param mixed $resument
     */
    public function setResument($resument): void
    {
        $this->resument = $resument;
    }

    /**
     * @return mixed
     */
    public function getCodigoAsunto()
    {
        return $this->codigoAsunto;
    }

    /**
     * @param mixed $codigoAsunto
     */
    public function setCodigoAsunto($codigoAsunto): void
    {
        $this->codigoAsunto = $codigoAsunto;
    }

    /**
     * @return mixed
     */
    public function getReferenciaExterna()
    {
        return $this->referenciaExterna;
    }

    /**
     * @param mixed $referenciaExterna
     */
    public function setReferenciaExterna($referenciaExterna): void
    {
        $this->referenciaExterna = $referenciaExterna;
    }

    /**
     * @return mixed
     */
    public function getNumeroExpediente()
    {
        return $this->numeroExpediente;
    }

    /**
     * @param mixed $numeroExpediente
     */
    public function setNumeroExpediente($numeroExpediente): void
    {
        $this->numeroExpediente = $numeroExpediente;
    }


}