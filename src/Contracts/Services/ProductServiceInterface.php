<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\PaginationPlugin\PagedPaginator;
use WooNinja\LMSContracts\Contracts\DTOs\Products\ProductInterface;

interface ProductServiceInterface
{
    /**
     * Get Products by ID
     */
    public function get(int $product_id): ProductInterface;
    
    /**
     * List Products
     */
    public function products(array $filters = []): PagedPaginator;
    
    /**
     * Return the Course(s) associated with a Product
     */
    public function courses(int $product_id): array;
    
    /**
     * List Related Products
     */
    public function related(int $product_id): PagedPaginator;
}