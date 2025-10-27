<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\PaginationPlugin\PagedPaginator;
use WooNinja\LMSContracts\Contracts\DTOs\Courses\CourseInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Products\ProductInterface;

interface CourseServiceInterface
{
    /**
     * Get a Course by its ID
     */
    public function get(int $course_id): CourseInterface;
    
    /**
     * Return the associated Product of a Course
     */
    public function product(int $course_id): ProductInterface;
    
    /**
     * Get a list of Courses
     */
    public function courses(array $filters = []): PagedPaginator;
    
    /**
     * Get the chapters of a Course
     */
    public function chapters(int $productable_id): PagedPaginator;
}