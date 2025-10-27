<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Coupons;

use Carbon\Carbon;

/**
 * Interface for Coupon DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Coupon
 * with all public properties accessible directly (based on Thinkific Coupon):
 * - public int $id
 * - public string $code
 * - public ?string $note
 * - public int $quantity_used
 * - public int $quantity
 * - public int $promotion_id
 * - public Carbon $created_at
 */
interface CouponInterface
{
    public function __construct(
        int $id,
        string $code,
        ?string $note,
        int $quantity_used,
        int $quantity,
        int $promotion_id,
        Carbon $created_at,
    );
}
