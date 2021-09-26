<?php

namespace App\documents\domain\repository;

use App\documents\domain\entity\Document;

interface DocumentRepository
{
    function save(Document $document);
}