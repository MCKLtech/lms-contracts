<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\SiteScripts\CreateSiteScriptInterface;
use WooNinja\LMSContracts\Contracts\DTOs\SiteScripts\SiteScriptInterface;
use WooNinja\LMSContracts\Contracts\DTOs\SiteScripts\UpdateSiteScriptInterface;

interface SiteScriptServiceInterface
{
    /**
     * Get a site script by ID
     */
    public function get(string $script_id): SiteScriptInterface;
    
    /**
     * Create a SiteScript
     */
    public function create(CreateSiteScriptInterface $script): SiteScriptInterface;
    
    /**
     * Update a SiteScript
     */
    public function update(UpdateSiteScriptInterface $script): Response;
    
    /**
     * Delete a site script
     */
    public function delete(string $script_id): Response;
    
    /**
     * List site scripts
     */
    public function scripts(): Paginator;
}