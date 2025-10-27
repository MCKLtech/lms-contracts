<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Contents;

/**
 * Interface for Content DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Content
 * with all public properties accessible directly (based on Thinkific Content):
 * - public int $id
 * - public string $name
 * - public int $position
 * - public int $chapter_id
 * - public string $contentable_type
 * - public bool $free
 * - public string $take_url
 */
interface ContentInterface
{
    public function __construct(
        int    $id,
        string $name,
        int    $position,
        int    $chapter_id,
        string $contentable_type,
        bool   $free,
        string $take_url,
    );
}