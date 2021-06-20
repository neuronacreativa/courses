<?php


namespace Orve\Entity;


class SicresFormulario
{
    private $expone;
    private $solicita;

    /**
     * SicresFormulario constructor.
     * @param $expone
     * @param $solicita
     */
    public function __construct($expone, $solicita)
    {
        $this->expone = $expone;
        $this->solicita = $solicita;
    }

    /**
     * @return mixed
     */
    public function getExpone()
    {
        return $this->expone;
    }

    /**
     * @param mixed $expone
     */
    public function setExpone($expone): void
    {
        $this->expone = $expone;
    }

    /**
     * @return mixed
     */
    public function getSolicita()
    {
        return $this->solicita;
    }

    /**
     * @param mixed $solicita
     */
    public function setSolicita($solicita): void
    {
        $this->solicita = $solicita;
    }


}