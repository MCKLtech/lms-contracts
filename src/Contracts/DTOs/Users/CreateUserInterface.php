<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Users;

/**
 * Interface for CreateUser DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific CreateUser
 * with all public properties accessible directly (based on Thinkific CreateUser):
 * - public string $first_name
 * - public string $last_name  
 * - public string $email
 * - public ?string $password
 * - public bool $skip_custom_fields_validation
 * - public bool $send_welcome_email
 * - public ?array $custom_profile_fields
 * - public ?array $roles
 * - public ?string $bio
 * - public ?string $company
 * - public ?string $headline
 * - public ?string $affiliate_code
 * - public ?int $affiliate_commission
 * - public ?string $affiliate_commission_type
 * - public ?string $affiliate_payout_email
 * - public ?string $external_id
 * - public ?string $provider
 */
interface CreateUserInterface
{
    public function __construct(
        string  $first_name,
        string  $last_name,
        string  $email,
        ?string $password,
        bool    $skip_custom_fields_validation,
        bool    $send_welcome_email,
        ?array  $custom_profile_fields,
        ?array  $roles,
        ?string $bio,
        ?string $company,
        ?string $headline,
        ?string $affiliate_code,
        ?int    $affiliate_commission,
        ?string $affiliate_commission_type,
        ?string $affiliate_payout_email,
        ?string $external_id,
        ?string $provider,
    );
}
