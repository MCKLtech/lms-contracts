<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\Webhooks\CreateWebhookInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Webhooks\UpdateWebhookInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Webhooks\WebhookInterface;

interface WebhookServiceInterface
{
    /**
     * Get a webhook by ID
     */
    public function get(string $webhook_id): WebhookInterface;
    
    /**
     * Create a Webhook
     */
    public function create(CreateWebhookInterface $webhook): WebhookInterface;
    
    /**
     * Update a Webhook
     */
    public function update(UpdateWebhookInterface $webhook): WebhookInterface;
    
    /**
     * Delete a webhook
     */
    public function delete(string $webhook_id): Response;
    
    /**
     * List webhooks
     */
    public function webhooks(): Paginator;
    
    /**
     * Determine if a webhook exists for a given topic and URL
     */
    public function has(string $topic, string $url): bool;
}