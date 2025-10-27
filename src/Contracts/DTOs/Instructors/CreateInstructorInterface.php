<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Instructors;

/**
 * Interface for CreateInstructor DTOs across LMS providers
 */
interface CreateInstructorInterface
{
    public function __construct(
        string $first_name,
        string $last_name,
        ?string $email,
        ?string $title,
        ?int $user_id,
        ?string $bio,
        ?string $slug,
        ?string $avatar_url,
    );
}