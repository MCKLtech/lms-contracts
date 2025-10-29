# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a **PHP library package** that provides shared contracts and interfaces for LMS (Learning Management System) provider packages like Thinkific and Kajabi. It enables dashboard applications to work with multiple LMS providers through a unified interface layer without changing business logic code.

**Key principle**: This package contains ONLY interfaces and contracts - no implementations. Implementation happens in separate provider-specific packages (e.g., `mckltech/thinkific`, `mckltech/kajabi`).

## Development Commands

### Testing
```bash
# Run all tests
vendor/bin/phpunit

# Run specific test
vendor/bin/phpunit tests/YourTest.php

# Run with coverage (if configured)
vendor/bin/phpunit --coverage-html coverage
```

### Dependencies
```bash
# Install dependencies
composer install

# Update dependencies
composer update
```

### Code Quality
```bash
# No linting/static analysis is currently configured
# Consider adding PHPStan or Psalm if needed
```

## Architecture

### Two-Layer Interface System

The package uses a dual-interface pattern to handle both read and write operations:

1. **Read DTOs** (e.g., `UserInterface`, `EnrollmentInterface`)
   - Use constructor signatures to enforce structure
   - Properties accessed directly via public properties on implementing classes
   - Include helper methods (e.g., `getFullName()`)
   - Documentation lists all required public properties

2. **Write DTOs** (e.g., `CreateUserInterface`, `UpdateEnrollmentInterface`)
   - Use constructor signatures to enforce exact parameter structure
   - Constructor must match Thinkific's signature exactly (the "source of truth")
   - Other providers implement same constructor but may ignore unused parameters internally

### Service Layer Architecture

All service interfaces return interface types, never concrete implementations:

```
LMSServiceInterface (not yet in repo, but referenced in README)
├── UserServiceInterface
├── CourseServiceInterface
├── EnrollmentServiceInterface
├── ProductServiceInterface
├── OrderServiceInterface
├── BundleServiceInterface
├── CouponServiceInterface
├── InstructorServiceInterface
├── PromotionServiceInterface
├── GroupServiceInterface
├── ChapterServiceInterface
├── ContentServiceInterface
├── CourseReviewServiceInterface
├── WebhookServiceInterface
└── SiteScriptServiceInterface
```

### Directory Structure

```
src/Contracts/
├── DTOs/              # Data Transfer Object interfaces
│   ├── Users/         # User, CreateUser, UpdateUser interfaces
│   ├── Enrollments/   # Enrollment CRUD interfaces
│   ├── Courses/       # Course interfaces
│   ├── Products/      # Product interfaces
│   ├── Orders/        # Order interfaces
│   ├── Bundles/       # Bundle interfaces
│   ├── Coupons/       # Coupon interfaces
│   ├── Instructors/   # Instructor interfaces
│   ├── Promotions/    # Promotion interfaces
│   ├── Groups/        # Group interfaces
│   ├── Chapters/      # Chapter interfaces
│   ├── Contents/      # Content interfaces
│   ├── CourseReviews/ # Review interfaces
│   ├── CustomProfileFieldDefinitions/
│   ├── SiteScripts/   # Site script interfaces
│   ├── OAuth/         # OAuth token interfaces
│   ├── Webhooks/      # Webhook interfaces
│   └── Quizzes/       # Quiz interfaces
└── Services/          # Service interfaces for each entity type
```

## Key Principles When Adding/Modifying Interfaces

### 1. Thinkific is Source of Truth
All constructor signatures, property names, and method signatures must match Thinkific's implementation. Other providers adapt to this standard.

### 2. Constructor Signatures are the Contract
Interface constructors define the exact structure. Changes to constructor parameters are breaking changes requiring major version bump.

### 3. Property Access Pattern
Read DTOs must document all properties in PHPDoc comments even though interfaces can't enforce public properties directly. Implementing classes expose these as public properties.

### 4. Return Types Must Be Interfaces
Service methods return interface types (e.g., `UserInterface`), never concrete types (e.g., `ThinkificUser`). This enables polymorphism.

### 5. Pagination Uses Saloon
All list operations return `Saloon\PaginationPlugin\PagedPaginator` for consistent pagination across providers.

### 6. Special Enrollment Parameters
Note the unusual pattern in `EnrollmentServiceInterface`: some methods take interface parameters like `ReadEnrollmentInterface` instead of scalar types. This supports composite IDs across different providers.

## Working With This Codebase

### Adding a New Interface
1. Determine if it's a Read DTO, Write DTO (Create/Update), or Service interface
2. Place in appropriate directory under `src/Contracts/`
3. Use proper namespace: `WooNinja\LMSContracts\Contracts\{DTOs|Services}\{Entity}`
4. Document all expected properties in PHPDoc for Read DTOs
5. Define exact constructor signature for DTOs
6. Return interface types for service methods

### Modifying Existing Interfaces
**BE CAREFUL**: Any interface change is a breaking change!
- Adding required constructor parameters = breaking
- Removing parameters = breaking
- Changing parameter types = breaking
- Adding new methods to service interfaces = breaking for implementers

Safe changes:
- Adding optional constructor parameters at end (with default values in implementations)
- Adding PHPDoc clarifications
- Adding new service interfaces (not modifying existing ones)

### Type Hints
- Use native PHP types (string, int, bool, float, array)
- Use Carbon for dates/times (from `nesbot/carbon` dependency)
- Use nullable types with `?` prefix when appropriate
- Return type `void` for delete operations
- Return type `Response` (from Saloon) for operations that don't return entities

## Dependencies

Core dependencies:
- **PHP ^8.1** - Minimum version
- **nesbot/carbon** - Date/time handling
- **saloonphp/pagination-plugin** - Pagination support
- **saloonphp/rate-limit-plugin** - Rate limiting support

Dev dependencies:
- **phpunit/phpunit ^10.0** - Testing framework

## Namespace Convention

All code uses the namespace prefix: `WooNinja\LMSContracts\`

Example:
- DTOs: `WooNinja\LMSContracts\Contracts\DTOs\Users\UserInterface`
- Services: `WooNinja\LMSContracts\Contracts\Services\UserServiceInterface`

## Versioning

This package follows semantic versioning strictly:
- **Major**: Breaking changes to any interface
- **Minor**: New interfaces added (backward compatible)
- **Patch**: Documentation updates, no code changes

Interface changes are considered breaking because all implementing packages must be updated.