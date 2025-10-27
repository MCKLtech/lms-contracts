<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use WooNinja\LMSContracts\Contracts\DTOs\Contents\ContentInterface;

interface ContentServiceInterface
{
    /**
     * Get a Content of a Chapter by its ID
     */
    public function get(int $content_id): ContentInterface;
}