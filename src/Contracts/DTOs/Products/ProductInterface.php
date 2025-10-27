<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Products;

use Carbon\Carbon;

/**
 * Interface for Product DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Product
 * with all public properties accessible directly (based on Thinkific Product):
 * - public int $id
 * - public Carbon $created_at
 * - public int $productable_id
 * - public string $productable_type
 * - public float $price
 * - public int $position
 * - public string $status
 * - public string $name
 * - public bool $private
 * - public bool $hidden
 * - public bool $subscription
 * - public ?int $days_until_expiry
 * - public bool $has_certificate
 * - public ?string $keywords
 * - public ?string $seo_title
 * - public ?string $seo_description
 * - public array $collection_ids
 * - public array $related_product_ids
 * - public ?string $description
 * - public ?string $card_image_url
 * - public string $slug
 * - public array $product_prices
 */
interface ProductInterface
{
    public function __construct(
        int     $id,
        Carbon  $created_at,
        int     $productable_id,
        string  $productable_type,
        float   $price,
        int     $position,
        string  $status,
        string  $name,
        bool    $private,
        bool    $hidden,
        bool    $subscription,
        ?int    $days_until_expiry,
        bool    $has_certificate,
        ?string $keywords,
        ?string $seo_title,
        ?string $seo_description,
        array   $collection_ids,
        array   $related_product_ids,
        ?string $description,
        ?string $card_image_url,
        string  $slug,
        array   $product_prices,
    );
}
