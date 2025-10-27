<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Orders;

use Carbon\Carbon;

/**
 * Interface for Order DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Order
 * with all public properties accessible directly (based on Thinkific Order):
 * - public int $id
 * - public Carbon $created_at
 * - public int $user_id
 * - public string $user_email
 * - public string $user_name
 * - public string $product_name
 * - public int $product_id
 * - public float $amount_dollars
 * - public int $amount_cents
 * - public bool $subscription
 * - public ?string $coupon_code
 * - public ?int $coupon_id
 * - public ?string $affiliate_referral_code
 * - public string $status
 * - public array $items
 */
interface OrderInterface
{
    public function __construct(
        int     $id,
        Carbon  $created_at,
        int     $user_id,
        string  $user_email,
        string  $user_name,
        string  $product_name,
        int     $product_id,
        float   $amount_dollars,
        int     $amount_cents,
        bool    $subscription,
        ?string $coupon_code,
        ?int    $coupon_id,
        ?string $affiliate_referral_code,
        string  $status,
        array   $items
    );
}
