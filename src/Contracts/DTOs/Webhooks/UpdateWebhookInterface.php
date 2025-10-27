<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Webhooks;

/**
 * Interface for UpdateWebhook DTOs across LMS providers
 */
interface UpdateWebhookInterface
{
    public function __construct(
        string    $id,
        string $topic,
        string $target_url,
    );
}