<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\CourseReviews\CreateReviewInterface;
use WooNinja\LMSContracts\Contracts\DTOs\CourseReviews\ReviewInterface;

interface CourseReviewServiceInterface
{
    /**
     * Get a course review by ID
     */
    public function get(int $review_id): ReviewInterface;
    
    /**
     * Create a course review
     */
    public function create(CreateReviewInterface $createReview): ReviewInterface;
    
    /**
     * Get reviews for a given Course
     */
    public function reviews(int $course_id, bool $approved = false): Paginator;
}