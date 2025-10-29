<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\Promotions\CreatePromotionInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Promotions\PromotionInterface;

interface PromotionServiceInterface
{
    /**
     * Get Promotion by ID
     */
    public function get(int $promotion_id): PromotionInterface;
    
    /**
     * Get Promotions
     */
    public function promotions(): Paginator;
    
    /**
     * Return the Coupons of the given Promotion
     */
    public function coupons(int $promotion_id): Paginator;
    
    /**
     * Create a Promotion
     */
    public function create(CreatePromotionInterface $promotion): PromotionInterface;
    
    /**
     * Update a Promotion
     */
    public function update($promotion): Response;
    
    /**
     * Delete a Promotion
     */
    public function delete(int $promotion_id): Response;
}