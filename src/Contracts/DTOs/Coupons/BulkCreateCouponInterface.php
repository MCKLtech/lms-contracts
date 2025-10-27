<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Coupons;

/**
 * Interface for BulkCreateCoupon DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific BulkCreateCoupon
 * with all public properties accessible directly (based on Thinkific BulkCreateCoupon):
 * - public int $promotion_id
 * - public int $bulk_quantity_per_coupon
 * - public int $bulk_coupon_code_length
 * - public int $bulk_quantity
 */
interface BulkCreateCouponInterface
{
    public function __construct(
        int $promotion_id,
        int $bulk_quantity_per_coupon,
        int $bulk_coupon_code_length,
        int $bulk_quantity,
    );
}