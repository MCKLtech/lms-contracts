<?php

namespace WooNinja\LMSContracts\Contracts;

use WooNinja\LMSContracts\Contracts\Services\UserServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\CourseServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\EnrollmentServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\ProductServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\OrderServiceInterface;

/**
 * Main interface for LMS service providers (Thinkific, Kajabi, etc.)
 * 
 * Guarantees access to these service properties:
 * - $service->users (UserServiceInterface)
 * - $service->courses (CourseServiceInterface)
 * - $service->enrollments (EnrollmentServiceInterface)
 * - $service->products (ProductServiceInterface)
 * - $service->orders (OrderServiceInterface)
 * 
 * Plus provider-specific services accessible as public properties
 */
interface LMSServiceInterface
{
    /**
     * Get the provider name
     */
    public function getProviderName(): string;
    
    /**
     * Check if service is properly configured and connected
     */
    public function isConnected(): bool;
    
    // Core services that all providers must implement
    public function users(): UserServiceInterface;
    public function courses(): CourseServiceInterface;
    public function enrollments(): EnrollmentServiceInterface;
    public function products(): ProductServiceInterface;
    public function orders(): OrderServiceInterface;
}