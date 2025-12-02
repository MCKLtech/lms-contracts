<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Users;

use Carbon\Carbon;

/**
 * Interface for User DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific User
 * with all public properties accessible directly (based on Thinkific User):
 * - public int $id
 * - public string $first_name  
 * - public string $last_name
 * - public string $email
 * - public ?string $password
 * - public array $roles
 * - public ?string $avatar_url
 * - public ?string $bio
 * - public ?string $company
 * - public ?string $headline
 * - public ?string $external_source
 * - public ?string $affiliate_code
 * - public ?int $affiliate_commission
 * - public ?string $affiliate_commission_type
 * - public ?string $affiliate_payout_email
 * - public ?array $custom_profile_fields
 */
interface UserInterface
{
    public function __construct(
        int     $id,
        string  $first_name,
        string  $last_name,
        string  $email,
        ?string $password,
        array   $roles,
        ?string $avatar_url,
        ?string $bio,
        ?string $company,
        ?string $headline,
        ?string $external_source,
        ?string $affiliate_code,
        ?int    $affiliate_commission,
        ?string $affiliate_commission_type,
        ?string $affiliate_payout_email,
        ?array  $custom_profile_fields,
        ?Carbon $created_at,
    );
    
    /**
     * Get user's full name
     */
    public function getFullName(): string;
}
