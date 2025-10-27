<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Webhooks;

use Carbon\Carbon;

/**
 * Interface for Webhook DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Webhook
 * with all public properties accessible directly (based on Thinkific Webhook):
 * - public string $id
 * - public string $status
 * - public string $topic
 * - public Carbon $created_at
 * - public string $created_by
 * - public Carbon $updated_at
 * - public string $updated_by
 * - public string $target_url
 */
interface WebhookInterface
{
    public function __construct(
        string $id,
        string $status,
        string $topic,
        Carbon $created_at,
        string $created_by,
        Carbon $updated_at,
        string $updated_by,
        string $target_url,
    );
}