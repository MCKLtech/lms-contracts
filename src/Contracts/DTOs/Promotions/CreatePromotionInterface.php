<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Promotions;

use Carbon\Carbon;

/**
 * Interface for CreatePromotion DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific CreatePromotion
 * with all public properties accessible directly (based on Thinkific CreatePromotion):
 * - public string $name
 * - public ?string $description
 * - public ?Carbon $starts_at
 * - public ?Carbon $expires_at
 * - public string $discount_type
 * - public int $amount
 * - public ?array $product_ids
 * - public ?array $coupon_ids
 * - public ?int $duration
 */
interface CreatePromotionInterface
{
    public function __construct(
        string $name,
        ?string $description,
        ?Carbon $starts_at,
        ?Carbon $expires_at,
        string $discount_type,
        int $amount,
        ?array $product_ids,
        ?array $coupon_ids,
        ?int $duration
    );
}