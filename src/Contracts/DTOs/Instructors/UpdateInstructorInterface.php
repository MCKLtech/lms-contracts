<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Instructors;

/**
 * Interface for UpdateInstructor DTOs across LMS providers
 */
interface UpdateInstructorInterface
{
    public function __construct(
        int $id,
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