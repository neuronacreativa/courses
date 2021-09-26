<?php

namespace App\registry\domain\repository;

use App\registry\domain\entity\Registry;

interface RegistryRepository
{
    function save(Registry $registry);
}