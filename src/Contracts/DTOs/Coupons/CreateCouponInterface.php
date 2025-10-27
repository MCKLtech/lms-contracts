<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Coupons;

/**
 * Interface for CreateCoupon DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific CreateCoupon
 * with all public properties accessible directly (based on Thinkific CreateCoupon):
 * - public int $promotion_id
 * - public string $code
 * - public ?int $quantity
 * - public ?string $note
 */
interface CreateCouponInterface
{
    public function __construct(
        int $promotion_id,
        string $code,
        ?int $quantity,
        ?string $note
    );
}