<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Coupons;

/**
 * Interface for UpdateCoupon DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific UpdateCoupon
 * with all public properties accessible directly (based on Thinkific UpdateCoupon):
 * - public int $coupon_id
 * - public ?string $code
 * - public ?string $note
 * - public ?int $quantity
 * - public ?int $quantity_used
 */
interface UpdateCouponInterface
{
    public function __construct(
        int $coupon_id,
        ?string $code,
        ?string $note,
        ?int $quantity,
        ?int $quantity_used
    );
}