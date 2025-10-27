<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Users;

/**
 * Interface for UpdateUser DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific UpdateUser
 * with all public properties accessible directly (based on Thinkific UpdateUser):
 * - public int $id
 * - public string $first_name
 * - public string $last_name
 * - public string $email
 * - public ?string $password
 * - public ?array $custom_profile_fields
 * - public ?array $roles
 * - public ?string $bio
 * - public ?string $avatar_url
 * - public ?string $company
 * - public ?string $headline
 * - public ?string $external_source
 * - public ?string $affiliate_code
 * - public ?int $affiliate_commission
 * - public ?string $affiliate_commission_type
 * - public ?string $affiliate_payout_email
 */
interface UpdateUserInterface
{
    public function __construct(
        int     $id,
        string  $first_name,
        string  $last_name,
        string  $email,
        ?string $password,
        ?array  $custom_profile_fields,
        ?array  $roles,
        ?string $bio,
        ?string $avatar_url,
        ?string $company,
        ?string $headline,
        ?string $external_source,
        ?string $affiliate_code,
        ?int    $affiliate_commission,
        ?string $affiliate_commission_type,
        ?string $affiliate_payout_email
    );
}
