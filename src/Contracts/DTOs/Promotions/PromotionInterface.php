<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Promotions;

use Carbon\Carbon;

/**
 * Interface for Promotion DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Promotion
 * with all public properties accessible directly (based on Thinkific Promotion):
 * - public int $id
 * - public string $name
 * - public ?string $description
 * - public ?Carbon $starts_at
 * - public ?Carbon $expires_at
 * - public string $discount_type
 * - public int $amount
 * - public ?array $coupon_ids
 * - public ?array $product_ids
 * - public ?int $duration
 */
interface PromotionInterface
{
    public function __construct(
        int    $id,
        string $name,
        ?string $description,
        ?Carbon $starts_at,
        ?Carbon $expires_at,
        string $discount_type,
        int    $amount,
        ?array  $coupon_ids,
        ?array  $product_ids,
        ?int    $duration
    );
}
