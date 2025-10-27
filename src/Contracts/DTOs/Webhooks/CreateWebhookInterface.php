<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Webhooks;

/**
 * Interface for CreateWebhook DTOs across LMS providers
 */
interface CreateWebhookInterface
{
    public function __construct(
        string $topic,
        string $target_url,
    );
}