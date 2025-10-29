<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\PagedPaginator;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\CreateEnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\DeleteEnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\EnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\ReadEnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\UpdateEnrollmentInterface;

interface EnrollmentServiceInterface
{
    /**
     * Get an Enrollment by ID
     */
    public function get(ReadEnrollmentInterface $enrollment_id): EnrollmentInterface;
    
    /**
     * List enrollments with optional filters
     */
    public function enrollments(array $filters = []): PagedPaginator;
    
    /**
     * Create an Enrollment
     */
    public function create(CreateEnrollmentInterface $enrollment): EnrollmentInterface;
    
    /**
     * Update an Enrollment
     */
    public function update(UpdateEnrollmentInterface $enrollment): Response;
    
    /**
     * Expire an Enrollment
     */
    public function expire(DeleteEnrollmentInterface $enrollment_id): Response;
    
    /**
     * Find enrollments for a given Course
     */
    public function enrollmentsForCourse(int $course_id, array $filters = []): PagedPaginator;
    
    /**
     * Find Enrollments for a given User
     */
    public function enrollmentsForUser(int|string $user_id_or_email, array $filters = []): PagedPaginator;
    
    /**
     * Find Enrollments for a given User in a given Course
     */
    public function enrollmentsForUserInCourse(int|string $user_id_or_email, int $course_id, array $filters = []): PagedPaginator;
    
    /**
     * Determine if user has existing enrollment in a course
     */
    public function isUserEnrolledInCourse(int|string $user_id_or_email, int $course_id, array $filters = []): bool;
}