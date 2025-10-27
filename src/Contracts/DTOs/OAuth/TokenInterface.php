<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\OAuth;

use Carbon\Carbon;

/**
 * Interface for OAuth Token DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Token
 * with all public properties accessible directly (based on Thinkific Token):
 * - public string $access_token
 * - public string $refresh_token
 * - public string $token_type
 * - public string $gid
 * - public Carbon $expires_at
 */
interface TokenInterface
{
    public function __construct(
        string $access_token,
        string $refresh_token,
        string $token_type,
        string $gid,
        Carbon $expires_at
    );
}