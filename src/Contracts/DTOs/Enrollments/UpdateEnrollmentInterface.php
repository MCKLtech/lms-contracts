<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Enrollments;

use Carbon\Carbon;

/**
 * Interface for UpdateEnrollment DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific UpdateEnrollment
 * with all public properties accessible directly (based on Thinkific UpdateEnrollment):
 * - public int $enrollment_id
 * - public ?Carbon $activated_at
 * - public ?Carbon $expiry_date
 */
interface UpdateEnrollmentInterface
{
    public function __construct(
        int    $enrollment_id,
        ?Carbon $activated_at,
        ?Carbon $expiry_date,
    );
}
