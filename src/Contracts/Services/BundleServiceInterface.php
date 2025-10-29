<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\Bundles\BundleInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Bundles\CreateBundleEnrollmentInterface;

interface BundleServiceInterface
{
    /**
     * Get a Bundle by its ID
     */
    public function get(int $productable_id): BundleInterface;
    
    /**
     * Get the Courses of a Bundle
     */
    public function courses(int $productable_id): Paginator;
    
    /**
     * Get the enrollments of a Bundle
     */
    public function enrollments(int $productable_id, array $filters = []): Paginator;
    
    /**
     * Create an enrollment in a bundle
     */
    public function createEnrollment(CreateBundleEnrollmentInterface $createBundleEnrollment): Response;
    
    /**
     * Update an enrollment in a bundle
     */
    public function updateEnrollment($updateBundleEnrollment): Response;
    
    /**
     * Expire an enrollment in a bundle
     */
    public function expireEnrollment(int $productable_id, int $user_id): Response;
    
    /**
     * Determine if a user is part of a bundle
     */
    public function isUserEnrolled(int $productable_id, int|string $user_id_or_email, array $filters = []): bool;
}