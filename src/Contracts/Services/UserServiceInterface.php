<?php

namespace WooNinja\LMSContracts\Contracts\Services;

use Saloon\Http\Response;
use Saloon\PaginationPlugin\PagedPaginator;
use WooNinja\LMSContracts\Contracts\DTOs\Users\CreateUserInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Users\UpdateUserInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Users\UserInterface;

interface UserServiceInterface
{
    /**
     * Get a User by ID
     */
    public function get(int $user_id): UserInterface;
    
    /**
     * Get a list of Users with pagination
     */
    public function users(array $filters = []): PagedPaginator;
    
    /**
     * Create a User
     */
    public function create(CreateUserInterface $user): UserInterface;
    
    /**
     * Update a User
     */
    public function update(UpdateUserInterface $user): Response;
    
    /**
     * Delete a User
     */
    public function delete(int $user_id): void;
    
    /**
     * Search for a user by ID or email
     */
    public function find(string|int $user_id_or_email): UserInterface|null;
    
    /**
     * Get a user by exact email
     */
    public function findByEmail(string $email): ?UserInterface;
}
