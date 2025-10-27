<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Chapters;

/**
 * Interface for Chapter DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Chapter
 * with all public properties accessible directly (based on Thinkific Chapter):
 * - public int $id
 * - public string $name
 * - public int $position
 * - public ?string $description
 * - public ?int $duration_in_seconds
 * - public array $content_ids
 */
interface ChapterInterface
{
    public function __construct(
        int $id,
        string $name,
        int $position,
        ?string $description,
        ?int $duration_in_seconds,
        array $content_ids,
    );
}