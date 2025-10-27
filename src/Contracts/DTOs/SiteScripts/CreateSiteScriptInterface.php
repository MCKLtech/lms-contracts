<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\SiteScripts;

/**
 * Interface for CreateSiteScript DTOs across LMS providers
 */
interface CreateSiteScriptInterface
{
    public function __construct(
        string  $name,
        string  $description,
        array   $page_scopes,
        ?string $src = null,
        ?string $content = null,
        ?string $location = 'footer',
        ?string $load_method = 'default',
        ?string $category = 'functional',
    );
}