<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\CourseReviews;

use Carbon\Carbon;

/**
 * Interface for Review DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Review
 * with all public properties accessible directly (based on Thinkific Review):
 * - public int $id
 * - public int $rating
 * - public string $title
 * - public string $review_text
 * - public int $user_id
 * - public int $course_id
 * - public bool $approved
 * - public Carbon $created_at
 */
interface ReviewInterface
{
    public function __construct(
        int $id,
        int $rating,
        string $title,
        string $review_text,
        int $user_id,
        int $course_id,
        bool $approved,
        Carbon $created_at
    );
}