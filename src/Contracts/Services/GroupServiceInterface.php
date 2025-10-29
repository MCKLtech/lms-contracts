<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\Paginator;
use WooNinja\LMSContracts\Contracts\DTOs\Groups\GroupInterface;

interface GroupServiceInterface
{
    /**
     * Get a Group by ID
     */
    public function get(int $group_id): GroupInterface;
    
    /**
     * List all groups
     */
    public function groups(): Paginator;
    
    /**
     * Create a Group
     */
    public function create(string $name): GroupInterface;
    
    /**
     * Delete a Group
     */
    public function delete(int $group_id): void;
    
    /**
     * Retrieve the users of a given group
     */
    public function users($group_id, array $params = []): Paginator;
    
    /**
     * Add a user to a given group(s)
     */
    public function addUser(int $user_id, array $group_names): Response;
    
    /**
     * Determine if a user is in a group
     */
    public function isUserInGroup(string $email, int $group_id): bool;
    
    /**
     * The Analysts for a given Group
     */
    public function analysts(int $group_id): array;
    
    /**
     * Assign Analysts to a Group
     */
    public function assignAnalysts(int $group_id, array $user_ids): Response;
    
    /**
     * Remove an analyst from a Group
     */
    public function removeAnalyst(int $group_id, int $user_id): Response;
}