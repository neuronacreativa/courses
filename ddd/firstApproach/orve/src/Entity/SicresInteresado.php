<?php


namespace Orve\Entity;


class SicresInteresado
{
    private $tipoDocumentoIdentificacionInteresado;
    private $documentoIdentificacionInteresado;
    private $razonSocialInteresado;
    private $nombreInteresado;
    private $primerApellidoInteresado;
    private $segundoApellidoInteresado;
    private $tipoDocumentoIdentificacionRepresentante;
    private $documentoIdentificacionRepresentante;
    private $razonSocialRepresentante;
    private $nombreRepresentante;
    private $primerApellidoRepresentante;
    private $segundoApellidoRepresentante;
    private $paisInteresado;
    private $provinciaInteresado;
    private $municipioInteresado;
    private $direccionInteresado;
    private $codigoPostalInteresado;
    private $correoElectronicoInteresado;
    private $telefonoContactoInteresado;
    private $direccionElectronicaHabilitadaInteresado;
    private $paisRepresentante;
    private $provinciaRepresentante;
    private $municipioRepresentante;
    private $direccionRepresentante;
    private $codigoPostalRepresentante;
    private $correoElectronicoRepresentante;
    private $telefonoContactoRepresentante;
    private $direccionEletronicaHabilitadaRepresentante;
    private $canalPreferenteComunicacionRepresentante;
    private $observaciones;

    /**
     * SicresInteresado constructor.
     * @param $tipoDocumentoIdentificacionInteresado
     * @param $documentoIdentificacionInteresado
     * @param $razonSocialInteresado
     * @param $nombreInteresado
     * @param $primerApellidoInteresado
     * @param $segundoApellidoInteresado
     * @param $tipoDocumentoIdentificacionRepresentante
     * @param $documentoIdentificacionRepresentante
     * @param $razonSocialRepresentante
     * @param $nombreRepresentante
     * @param $primerApellidoRepresentante
     * @param $segundoApellidoRepresentante
     * @param $paisInteresado
     * @param $provinciaInteresado
     * @param $municipioInteresado
     * @param $direccionInteresado
     * @param $codigoPostalInteresado
     * @param $correoElectronicoInteresado
     * @param $telefonoContactoInteresado
     * @param $direccionElectronicaHabilitadaInteresado
     * @param $paisRepresentante
     * @param $provinciaRepresentante
     * @param $municipioRepresentante
     * @param $direccionRepresentante
     * @param $codigoPostalRepresentante
     * @param $correoElectronicoRepresentante
     * @param $telefonoContactoRepresentante
     * @param $direccionEletronicaHabilitadaRepresentante
     * @param $canalPreferenteComunicacionRepresentante
     * @param $observaciones
     */
    public function __construct($tipoDocumentoIdentificacionInteresado, $documentoIdentificacionInteresado, $razonSocialInteresado, $nombreInteresado, $primerApellidoInteresado, $segundoApellidoInteresado, $tipoDocumentoIdentificacionRepresentante, $documentoIdentificacionRepresentante, $razonSocialRepresentante, $nombreRepresentante, $primerApellidoRepresentante, $segundoApellidoRepresentante, $paisInteresado, $provinciaInteresado, $municipioInteresado, $direccionInteresado, $codigoPostalInteresado, $correoElectronicoInteresado, $telefonoContactoInteresado, $direccionElectronicaHabilitadaInteresado, $paisRepresentante, $provinciaRepresentante, $municipioRepresentante, $direccionRepresentante, $codigoPostalRepresentante, $correoElectronicoRepresentante, $telefonoContactoRepresentante, $direccionEletronicaHabilitadaRepresentante, $canalPreferenteComunicacionRepresentante, $observaciones)
    {
        $this->tipoDocumentoIdentificacionInteresado = $tipoDocumentoIdentificacionInteresado;
        $this->documentoIdentificacionInteresado = $documentoIdentificacionInteresado;
        $this->razonSocialInteresado = $razonSocialInteresado;
        $this->nombreInteresado = $nombreInteresado;
        $this->primerApellidoInteresado = $primerApellidoInteresado;
        $this->segundoApellidoInteresado = $segundoApellidoInteresado;
        $this->tipoDocumentoIdentificacionRepresentante = $tipoDocumentoIdentificacionRepresentante;
        $this->documentoIdentificacionRepresentante = $documentoIdentificacionRepresentante;
        $this->razonSocialRepresentante = $razonSocialRepresentante;
        $this->nombreRepresentante = $nombreRepresentante;
        $this->primerApellidoRepresentante = $primerApellidoRepresentante;
        $this->segundoApellidoRepresentante = $segundoApellidoRepresentante;
        $this->paisInteresado = $paisInteresado;
        $this->provinciaInteresado = $provinciaInteresado;
        $this->municipioInteresado = $municipioInteresado;
        $this->direccionInteresado = $direccionInteresado;
        $this->codigoPostalInteresado = $codigoPostalInteresado;
        $this->correoElectronicoInteresado = $correoElectronicoInteresado;
        $this->telefonoContactoInteresado = $telefonoContactoInteresado;
        $this->direccionElectronicaHabilitadaInteresado = $direccionElectronicaHabilitadaInteresado;
        $this->paisRepresentante = $paisRepresentante;
        $this->provinciaRepresentante = $provinciaRepresentante;
        $this->municipioRepresentante = $municipioRepresentante;
        $this->direccionRepresentante = $direccionRepresentante;
        $this->codigoPostalRepresentante = $codigoPostalRepresentante;
        $this->correoElectronicoRepresentante = $correoElectronicoRepresentante;
        $this->telefonoContactoRepresentante = $telefonoContactoRepresentante;
        $this->direccionEletronicaHabilitadaRepresentante = $direccionEletronicaHabilitadaRepresentante;
        $this->canalPreferenteComunicacionRepresentante = $canalPreferenteComunicacionRepresentante;
        $this->observaciones = $observaciones;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumentoIdentificacionInteresado()
    {
        return $this->tipoDocumentoIdentificacionInteresado;
    }

    /**
     * @param mixed $tipoDocumentoIdentificacionInteresado
     */
    public function setTipoDocumentoIdentificacionInteresado($tipoDocumentoIdentificacionInteresado): void
    {
        $this->tipoDocumentoIdentificacionInteresado = $tipoDocumentoIdentificacionInteresado;
    }

    /**
     * @return mixed
     */
    public function getDocumentoIdentificacionInteresado()
    {
        return $this->documentoIdentificacionInteresado;
    }

    /**
     * @param mixed $documentoIdentificacionInteresado
     */
    public function setDocumentoIdentificacionInteresado($documentoIdentificacionInteresado): void
    {
        $this->documentoIdentificacionInteresado = $documentoIdentificacionInteresado;
    }

    /**
     * @return mixed
     */
    public function getRazonSocialInteresado()
    {
        return $this->razonSocialInteresado;
    }

    /**
     * @param mixed $razonSocialInteresado
     */
    public function setRazonSocialInteresado($razonSocialInteresado): void
    {
        $this->razonSocialInteresado = $razonSocialInteresado;
    }

    /**
     * @return mixed
     */
    public function getNombreInteresado()
    {
        return $this->nombreInteresado;
    }

    /**
     * @param mixed $nombreInteresado
     */
    public function setNombreInteresado($nombreInteresado): void
    {
        $this->nombreInteresado = $nombreInteresado;
    }

    /**
     * @return mixed
     */
    public function getPrimerApellidoInteresado()
    {
        return $this->primerApellidoInteresado;
    }

    /**
     * @param mixed $primerApellidoInteresado
     */
    public function setPrimerApellidoInteresado($primerApellidoInteresado): void
    {
        $this->primerApellidoInteresado = $primerApellidoInteresado;
    }

    /**
     * @return mixed
     */
    public function getSegundoApellidoInteresado()
    {
        return $this->segundoApellidoInteresado;
    }

    /**
     * @param mixed $segundoApellidoInteresado
     */
    public function setSegundoApellidoInteresado($segundoApellidoInteresado): void
    {
        $this->segundoApellidoInteresado = $segundoApellidoInteresado;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumentoIdentificacionRepresentante()
    {
        return $this->tipoDocumentoIdentificacionRepresentante;
    }

    /**
     * @param mixed $tipoDocumentoIdentificacionRepresentante
     */
    public function setTipoDocumentoIdentificacionRepresentante($tipoDocumentoIdentificacionRepresentante): void
    {
        $this->tipoDocumentoIdentificacionRepresentante = $tipoDocumentoIdentificacionRepresentante;
    }

    /**
     * @return mixed
     */
    public function getDocumentoIdentificacionRepresentante()
    {
        return $this->documentoIdentificacionRepresentante;
    }

    /**
     * @param mixed $documentoIdentificacionRepresentante
     */
    public function setDocumentoIdentificacionRepresentante($documentoIdentificacionRepresentante): void
    {
        $this->documentoIdentificacionRepresentante = $documentoIdentificacionRepresentante;
    }

    /**
     * @return mixed
     */
    public function getRazonSocialRepresentante()
    {
        return $this->razonSocialRepresentante;
    }

    /**
     * @param mixed $razonSocialRepresentante
     */
    public function setRazonSocialRepresentante($razonSocialRepresentante): void
    {
        $this->razonSocialRepresentante = $razonSocialRepresentante;
    }

    /**
     * @return mixed
     */
    public function getNombreRepresentante()
    {
        return $this->nombreRepresentante;
    }

    /**
     * @param mixed $nombreRepresentante
     */
    public function setNombreRepresentante($nombreRepresentante): void
    {
        $this->nombreRepresentante = $nombreRepresentante;
    }

    /**
     * @return mixed
     */
    public function getPrimerApellidoRepresentante()
    {
        return $this->primerApellidoRepresentante;
    }

    /**
     * @param mixed $primerApellidoRepresentante
     */
    public function setPrimerApellidoRepresentante($primerApellidoRepresentante): void
    {
        $this->primerApellidoRepresentante = $primerApellidoRepresentante;
    }

    /**
     * @return mixed
     */
    public function getSegundoApellidoRepresentante()
    {
        return $this->segundoApellidoRepresentante;
    }

    /**
     * @param mixed $segundoApellidoRepresentante
     */
    public function setSegundoApellidoRepresentante($segundoApellidoRepresentante): void
    {
        $this->segundoApellidoRepresentante = $segundoApellidoRepresentante;
    }

    /**
     * @return mixed
     */
    public function getPaisInteresado()
    {
        return $this->paisInteresado;
    }

    /**
     * @param mixed $paisInteresado
     */
    public function setPaisInteresado($paisInteresado): void
    {
        $this->paisInteresado = $paisInteresado;
    }

    /**
     * @return mixed
     */
    public function getProvinciaInteresado()
    {
        return $this->provinciaInteresado;
    }

    /**
     * @param mixed $provinciaInteresado
     */
    public function setProvinciaInteresado($provinciaInteresado): void
    {
        $this->provinciaInteresado = $provinciaInteresado;
    }

    /**
     * @return mixed
     */
    public function getMunicipioInteresado()
    {
        return $this->municipioInteresado;
    }

    /**
     * @param mixed $municipioInteresado
     */
    public function setMunicipioInteresado($municipioInteresado): void
    {
        $this->municipioInteresado = $municipioInteresado;
    }

    /**
     * @return mixed
     */
    public function getDireccionInteresado()
    {
        return $this->direccionInteresado;
    }

    /**
     * @param mixed $direccionInteresado
     */
    public function setDireccionInteresado($direccionInteresado): void
    {
        $this->direccionInteresado = $direccionInteresado;
    }

    /**
     * @return mixed
     */
    public function getCodigoPostalInteresado()
    {
        return $this->codigoPostalInteresado;
    }

    /**
     * @param mixed $codigoPostalInteresado
     */
    public function setCodigoPostalInteresado($codigoPostalInteresado): void
    {
        $this->codigoPostalInteresado = $codigoPostalInteresado;
    }

    /**
     * @return mixed
     */
    public function getCorreoElectronicoInteresado()
    {
        return $this->correoElectronicoInteresado;
    }

    /**
     * @param mixed $correoElectronicoInteresado
     */
    public function setCorreoElectronicoInteresado($correoElectronicoInteresado): void
    {
        $this->correoElectronicoInteresado = $correoElectronicoInteresado;
    }

    /**
     * @return mixed
     */
    public function getTelefonoContactoInteresado()
    {
        return $this->telefonoContactoInteresado;
    }

    /**
     * @param mixed $telefonoContactoInteresado
     */
    public function setTelefonoContactoInteresado($telefonoContactoInteresado): void
    {
        $this->telefonoContactoInteresado = $telefonoContactoInteresado;
    }

    /**
     * @return mixed
     */
    public function getDireccionElectronicaHabilitadaInteresado()
    {
        return $this->direccionElectronicaHabilitadaInteresado;
    }

    /**
     * @param mixed $direccionElectronicaHabilitadaInteresado
     */
    public function setDireccionElectronicaHabilitadaInteresado($direccionElectronicaHabilitadaInteresado): void
    {
        $this->direccionElectronicaHabilitadaInteresado = $direccionElectronicaHabilitadaInteresado;
    }

    /**
     * @return mixed
     */
    public function getPaisRepresentante()
    {
        return $this->paisRepresentante;
    }

    /**
     * @param mixed $paisRepresentante
     */
    public function setPaisRepresentante($paisRepresentante): void
    {
        $this->paisRepresentante = $paisRepresentante;
    }

    /**
     * @return mixed
     */
    public function getProvinciaRepresentante()
    {
        return $this->provinciaRepresentante;
    }

    /**
     * @param mixed $provinciaRepresentante
     */
    public function setProvinciaRepresentante($provinciaRepresentante): void
    {
        $this->provinciaRepresentante = $provinciaRepresentante;
    }

    /**
     * @return mixed
     */
    public function getMunicipioRepresentante()
    {
        return $this->municipioRepresentante;
    }

    /**
     * @param mixed $municipioRepresentante
     */
    public function setMunicipioRepresentante($municipioRepresentante): void
    {
        $this->municipioRepresentante = $municipioRepresentante;
    }

    /**
     * @return mixed
     */
    public function getDireccionRepresentante()
    {
        return $this->direccionRepresentante;
    }

    /**
     * @param mixed $direccionRepresentante
     */
    public function setDireccionRepresentante($direccionRepresentante): void
    {
        $this->direccionRepresentante = $direccionRepresentante;
    }

    /**
     * @return mixed
     */
    public function getCodigoPostalRepresentante()
    {
        return $this->codigoPostalRepresentante;
    }

    /**
     * @param mixed $codigoPostalRepresentante
     */
    public function setCodigoPostalRepresentante($codigoPostalRepresentante): void
    {
        $this->codigoPostalRepresentante = $codigoPostalRepresentante;
    }

    /**
     * @return mixed
     */
    public function getCorreoElectronicoRepresentante()
    {
        return $this->correoElectronicoRepresentante;
    }

    /**
     * @param mixed $correoElectronicoRepresentante
     */
    public function setCorreoElectronicoRepresentante($correoElectronicoRepresentante): void
    {
        $this->correoElectronicoRepresentante = $correoElectronicoRepresentante;
    }

    /**
     * @return mixed
     */
    public function getTelefonoContactoRepresentante()
    {
        return $this->telefonoContactoRepresentante;
    }

    /**
     * @param mixed $telefonoContactoRepresentante
     */
    public function setTelefonoContactoRepresentante($telefonoContactoRepresentante): void
    {
        $this->telefonoContactoRepresentante = $telefonoContactoRepresentante;
    }

    /**
     * @return mixed
     */
    public function getDireccionEletronicaHabilitadaRepresentante()
    {
        return $this->direccionEletronicaHabilitadaRepresentante;
    }

    /**
     * @param mixed $direccionEletronicaHabilitadaRepresentante
     */
    public function setDireccionEletronicaHabilitadaRepresentante($direccionEletronicaHabilitadaRepresentante): void
    {
        $this->direccionEletronicaHabilitadaRepresentante = $direccionEletronicaHabilitadaRepresentante;
    }

    /**
     * @return mixed
     */
    public function getCanalPreferenteComunicacionRepresentante()
    {
        return $this->canalPreferenteComunicacionRepresentante;
    }

    /**
     * @param mixed $canalPreferenteComunicacionRepresentante
     */
    public function setCanalPreferenteComunicacionRepresentante($canalPreferenteComunicacionRepresentante): void
    {
        $this->canalPreferenteComunicacionRepresentante = $canalPreferenteComunicacionRepresentante;
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


}