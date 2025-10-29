<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\Coupons\CouponInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Coupons\CreateCouponInterface;

interface CouponServiceInterface
{
    /**
     * Get Coupon by ID
     */
    public function get(int $coupon_id): CouponInterface;
    
    /**
     * Get Coupons for a given Promotion
     */
    public function coupons(int $promotion_id): Paginator;
    
    /**
     * Create a Coupon for a given Promotion
     */
    public function create(CreateCouponInterface $coupon): CouponInterface;
    
    /**
     * Create coupons in bulk
     */
    public function bulkCreate($coupon): array;
    
    /**
     * Update a Coupon
     */
    public function update($coupon): Response;
    
    /**
     * Delete a Coupon
     */
    public function delete(int $coupon_id): Response;
}