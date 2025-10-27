<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\CourseReviews;

/**
 * Interface for CreateReview DTOs across LMS providers
 */
interface CreateReviewInterface
{
    public function __construct(
        int $course_id,
        int $rating,
        string $title,
        string $review_text,
        int $user_id,
        bool $approved
    );
}