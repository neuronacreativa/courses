<?php

namespace App\registry\infrastructure\persistence\model;

use App\registry\domain\entity\Registry;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\registry\infrastructure\persistence\repository\MySqlRegistryRepository")
 */
class RegistryModel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $exchangerCode;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $registryNumber;

    /**
     * @param $id
     * @param $exchangerCode
     * @param $registryNumber
     */
    public function __construct($id, $exchangerCode, $registryNumber)
    {
        $this->id = $id;
        $this->exchangerCode = $exchangerCode;
        $this->registryNumber = $registryNumber;
    }

    public static function setRegistry(Registry $registry) : RegistryModel
    {
        return new RegistryModel(
            $registry->getExchangerCode(),
            $registry->getExchangerCode(),
            $registry->getRegistryNumber()
        );
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getExchangerCode()
    {
        return $this->exchangerCode;
    }

    /**
     * @param mixed $exchangerCode
     */
    public function setExchangerCode($exchangerCode): void
    {
        $this->exchangerCode = $exchangerCode;
    }

    /**
     * @return mixed
     */
    public function getRegistryNumber()
    {
        return $this->registryNumber;
    }

    /**
     * @param mixed $registryNumber
     */
    public function setRegistryNumber($registryNumber): void
    {
        $this->registryNumber = $registryNumber;
    }

}