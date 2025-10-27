<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Groups;

use Carbon\Carbon;

/**
 * Interface for Group DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Group
 * with all public properties accessible directly (based on Thinkific Group):
 * - public int $id
 * - public string $name
 * - public string $token
 * - public Carbon $created_at
 */
interface GroupInterface
{
    public function __construct(
        int    $id,
        string $name,
        string $token,
        Carbon $created_at
    );
}