<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\Chapters\ChapterInterface;

interface ChapterServiceInterface
{
    /**
     * Get a Course Chapter by its ID
     */
    public function get(int $chapter_id): ChapterInterface;
    
    /**
     * Get a list of chapter contents
     */
    public function content(int $chapter_id): Paginator;
}