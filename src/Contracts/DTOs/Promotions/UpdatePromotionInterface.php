<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Promotions;

use Carbon\Carbon;

/**
 * Interface for UpdatePromotion DTOs across LMS providers
 */
interface UpdatePromotionInterface
{
    public function __construct(
        int $promotion_id,
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