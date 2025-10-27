<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\SiteScripts;

/**
 * Interface for UpdateSiteScript DTOs across LMS providers
 */
interface UpdateSiteScriptInterface
{
    public function __construct(
        int    $id,
        string  $name,
        string  $description,
        array   $page_scopes,
        ?string $src,
        ?string $content,
        ?string $location,
        ?string $load_method,
        ?string $category,
    );
}