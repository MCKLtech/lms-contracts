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
 * - public int|string|null $user_id (optional - contact_id or email for Kajabi compatibility)
 * - public int|null $course_id (optional - offer_id for Kajabi compatibility)
 */
interface UpdateEnrollmentInterface
{
    public function __construct(
        int     $enrollment_id,
        ?Carbon $activated_at,
        ?Carbon $expiry_date,
        ?int    $user_id = null,
        ?int    $course_id = null,
    );
}
