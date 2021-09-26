<?php

namespace App\registry\domain\repository;

use App\registry\domain\entity\Document;

interface DocumentRepository
{
    function save(Document $document);
}