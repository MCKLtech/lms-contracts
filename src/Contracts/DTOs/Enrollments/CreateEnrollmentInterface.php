<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Enrollments;

use Carbon\Carbon;

/**
 * Interface for CreateEnrollment DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific CreateEnrollment
 * with all public properties accessible directly (based on Thinkific CreateEnrollment):
 * - public int $user_id
 * - public int $course_id
 * - public ?Carbon $activated_at
 * - public ?Carbon $expiry_date
 */
interface CreateEnrollmentInterface
{
    public function __construct(
        int    $user_id,
        int    $course_id,
        ?Carbon $activated_at,
        ?Carbon $expiry_date,
    );
}
