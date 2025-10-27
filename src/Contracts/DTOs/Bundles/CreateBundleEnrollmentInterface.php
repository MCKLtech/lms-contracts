<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Bundles;

use Carbon\Carbon;

/**
 * Interface for CreateBundleEnrollment DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific CreateBundleEnrollment
 * with all public properties accessible directly (based on Thinkific CreateBundleEnrollment):
 * - public int $productable_id
 * - public int $user_id
 * - public ?Carbon $activated_at
 * - public ?Carbon $expiry_date
 */
interface CreateBundleEnrollmentInterface
{
    public function __construct(
        int $productable_id,
        int $user_id,
        ?Carbon $activated_at,
        ?Carbon $expiry_date,
    );
}