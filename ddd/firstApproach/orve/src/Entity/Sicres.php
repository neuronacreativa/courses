<?php


namespace Orve\Entity;


class Sicres
{
    private SicresOrigen $sicresOrigen;
    private SicresDestino $sicresDestino;
    private SicresInteresado $sicresInteresado;
    private SicresAsunto $sicresAsunto;
    private SicresAnexo $sicresAnexo;
    private SicresInterno $sicresInterno;
    private SicresFormulario $sicresFormulario;

    /**
     * SicresService constructor.
     * @param SicresOrigen $sicresOrigen
     * @param SicresDestino $sicresDestino
     * @param SicresInteresado $sicresInteresado
     * @param SicresAsunto $sicresAsunto
     * @param SicresAnexo $sicresAnexo
     * @param SicresInterno $sicresInterno
     * @param SicresFormulario $sicresFormulario
     */
    public function __construct(SicresOrigen $sicresOrigen, SicresDestino $sicresDestino, SicresInteresado $sicresInteresado, SicresAsunto $sicresAsunto, SicresAnexo $sicresAnexo, SicresInterno $sicresInterno, SicresFormulario $sicresFormulario)
    {
        $this->sicresOrigen = $sicresOrigen;
        $this->sicresDestino = $sicresDestino;
        $this->sicresInteresado = $sicresInteresado;
        $this->sicresAsunto = $sicresAsunto;
        $this->sicresAnexo = $sicresAnexo;
        $this->sicresInterno = $sicresInterno;
        $this->sicresFormulario = $sicresFormulario;
    }

    /**
     * @return SicresOrigen
     */
    public function getSicresOrigen(): SicresOrigen
    {
        return $this->sicresOrigen;
    }

    /**
     * @param SicresOrigen $sicresOrigen
     */
    public function setSicresOrigen(SicresOrigen $sicresOrigen): void
    {
        $this->sicresOrigen = $sicresOrigen;
    }

    /**
     * @return SicresDestino
     */
    public function getSicresDestino(): SicresDestino
    {
        return $this->sicresDestino;
    }

    /**
     * @param SicresDestino $sicresDestino
     */
    public function setSicresDestino(SicresDestino $sicresDestino): void
    {
        $this->sicresDestino = $sicresDestino;
    }

    /**
     * @return SicresInteresado
     */
    public function getSicresInteresado(): SicresInteresado
    {
        return $this->sicresInteresado;
    }

    /**
     * @param SicresInteresado $sicresInteresado
     */
    public function setSicresInteresado(SicresInteresado $sicresInteresado): void
    {
        $this->sicresInteresado = $sicresInteresado;
    }

    /**
     * @return SicresAsunto
     */
    public function getSicresAsunto(): SicresAsunto
    {
        return $this->sicresAsunto;
    }

    /**
     * @param SicresAsunto $sicresAsunto
     */
    public function setSicresAsunto(SicresAsunto $sicresAsunto): void
    {
        $this->sicresAsunto = $sicresAsunto;
    }

    /**
     * @return SicresAnexo
     */
    public function getSicresAnexo(): SicresAnexo
    {
        return $this->sicresAnexo;
    }

    /**
     * @param SicresAnexo $sicresAnexo
     */
    public function setSicresAnexo(SicresAnexo $sicresAnexo): void
    {
        $this->sicresAnexo = $sicresAnexo;
    }

    /**
     * @return SicresInterno
     */
    public function getSicresInterno(): SicresInterno
    {
        return $this->sicresInterno;
    }

    /**
     * @param SicresInterno $sicresInterno
     */
    public function setSicresInterno(SicresInterno $sicresInterno): void
    {
        $this->sicresInterno = $sicresInterno;
    }

    /**
     * @return SicresFormulario
     */
    public function getSicresFormulario(): SicresFormulario
    {
        return $this->sicresFormulario;
    }

    /**
     * @param SicresFormulario $sicresFormulario
     */
    public function setSicresFormulario(SicresFormulario $sicresFormulario): void
    {
        $this->sicresFormulario = $sicresFormulario;
    }



}