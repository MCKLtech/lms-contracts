<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Instructors;

use Carbon\Carbon;

/**
 * Interface for Instructor DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Instructor
 * with all public properties accessible directly (based on Thinkific Instructor):
 * - public int $id
 * - public ?int $user_id
 * - public ?string $title
 * - public string $first_name
 * - public string $last_name
 * - public ?string $bio
 * - public string $slug
 * - public ?string $avatar_url
 * - public ?string $email
 * - public Carbon $created_at
 */
interface InstructorInterface
{
    public function __construct(
        int $id,
        ?int $user_id,
        ?string $title,
        string $first_name,
        string $last_name,
        ?string $bio,
        string $slug,
        ?string $avatar_url,
        ?string $email,
        Carbon $created_at
    );
}