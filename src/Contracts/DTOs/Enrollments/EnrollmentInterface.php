<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Enrollments;

use Carbon\Carbon;

/**
 * Interface for Enrollment DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Enrollment
 * with all public properties accessible directly (based on Thinkific Enrollment):
 * - public int $id
 * - public string $user_email
 * - public string $user_name
 * - public int $user_id
 * - public string $course_name
 * - public int $course_id
 * - public float $percentage_completed
 * - public bool $expired
 * - public bool $is_free_trial
 * - public bool $completed
 * - public ?Carbon $started_at
 * - public ?Carbon $activated_at
 * - public ?Carbon $completed_at
 * - public Carbon $updated_at
 * - public ?Carbon $expiry_date
 * - public ?string $credential_id
 * - public ?string $certificate_url
 * - public ?Carbon $certificate_expiry_date
 */
interface EnrollmentInterface
{
    public function __construct(
        int     $id,
        string  $user_email,
        string  $user_name,
        int     $user_id,
        string  $course_name,
        int     $course_id,
        float   $percentage_completed,
        bool    $expired,
        bool    $is_free_trial,
        bool    $completed,
        ?Carbon $started_at,
        ?Carbon $activated_at,
        ?Carbon $completed_at,
        Carbon  $updated_at,
        ?Carbon $expiry_date,
        ?string $credential_id,
        ?string $certificate_url,
        ?Carbon $certificate_expiry_date,
    );
}
