<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Enrollments;
interface DeleteEnrollmentInterface
{
    public function __construct(
        int|string $enrollment_id,
        ?int       $user_id,
        ?int       $course_id,
    );
}
