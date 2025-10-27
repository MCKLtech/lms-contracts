<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Bundles;

/**
 * Interface for Bundle DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Bundle
 * with all public properties accessible directly (based on Thinkific Bundle):
 * - public int $id
 * - public string $name
 * - public ?string $description
 * - public string $banner_image_url
 * - public array $course_ids
 * - public string $bundle_card_image_url
 * - public ?string $tagline
 * - public string $slug
 */
interface BundleInterface
{
    public function __construct(
        int         $id,
        string      $name,
        string|null $description,
        string      $banner_image_url,
        array       $course_ids,
        string      $bundle_card_image_url,
        string|null $tagline,
        string      $slug,
    );
}
