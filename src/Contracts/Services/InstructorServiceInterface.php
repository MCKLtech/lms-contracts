<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\PagedPaginator;
use WooNinja\LMSContracts\Contracts\DTOs\Instructors\InstructorInterface;

interface InstructorServiceInterface
{
    /**
     * Get an instructor by ID
     */
    public function get(int $instructorId): InstructorInterface;
    
    /**
     * Get all instructors
     */
    public function instructors(): PagedPaginator;
    
    /**
     * Create a new instructor
     */
    public function create($instructor): InstructorInterface;
    
    /**
     * Update an instructor
     */
    public function update($instructor): InstructorInterface;
    
    /**
     * Delete an instructor
     */
    public function delete(int $instructorId): Response;
}