<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\SiteScripts;

/**
 * Interface for SiteScript DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific SiteScript
 * with all public properties accessible directly (based on Thinkific SiteScript):
 * - public string $id
 * - public string $name
 * - public string $description
 * - public array $page_scopes
 * - public string $location
 * - public string $load_method
 * - public string $category
 * - public ?string $content
 * - public ?string $src
 */
interface SiteScriptInterface
{
    public function __construct(
        string $id,
        string $name,
        string $description,
        array  $page_scopes,
        string $location,
        string $load_method,
        string $category,
        ?string $content = null,
        ?string $src = null,
    );
}