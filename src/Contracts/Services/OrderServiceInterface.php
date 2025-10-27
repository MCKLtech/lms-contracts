<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\PaginationPlugin\PagedPaginator;
use WooNinja\LMSContracts\Contracts\DTOs\Orders\OrderInterface;

interface OrderServiceInterface
{
    /**
     * Get an Order by ID
     */
    public function get(int $order_id): OrderInterface;
    
    /**
     * List Orders
     */
    public function orders(array $filters = []): PagedPaginator;
}