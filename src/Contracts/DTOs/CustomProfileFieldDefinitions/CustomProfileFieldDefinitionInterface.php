<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\CustomProfileFieldDefinitions;

/**
 * Interface for CustomProfileFieldDefinition DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific CustomProfileFieldDefinition
 * with all public properties accessible directly (based on Thinkific CustomProfileFieldDefinition):
 * - public int $id
 * - public string $label
 * - public string $field_type
 * - public bool $required
 */
interface CustomProfileFieldDefinitionInterface
{
    public function __construct(
        int    $id,
        string $label,
        string $field_type,
        bool   $required
    );
}