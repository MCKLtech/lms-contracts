# LMS Contracts

Shared contracts and interfaces for LMS provider packages (Thinkific, Kajabi, etc.).

## Purpose

This package provides a common interface layer that allows dashboard applications to work seamlessly with multiple LMS providers without changing business logic code.

## Key Features

- **Magic Method DTOs**: Access properties like `$user->first_name` regardless of provider
- **Identical Service APIs**: Same method signatures across all providers
- **Type Safety**: Full IDE support and type hints
- **Zero Dashboard Changes**: Existing code works without modification
- **Provider Flexibility**: Switch between providers via configuration

## Installation

```bash
composer require mckltech/lms-contracts
```

## Architecture

### DTO Interfaces

All DTO interfaces use PHP magic methods to guarantee property access:

```php
interface UserInterface 
{
    public function __get(string $name): mixed;
    public function __isset(string $name): bool;
    public function getFullName(): string;
}
```

This ensures that `$user->first_name`, `$user->email`, etc. work consistently across all providers.

### Service Interfaces

Service interfaces guarantee identical method signatures:

```php
interface UserServiceInterface 
{
    public function get(int $user_id): UserInterface;
    public function users(array $filters = []): PagedPaginator;
    public function create($user): UserInterface;
    // ... etc
}
```

### Main LMS Interface

The main service interface provides access to all core services:

```php
interface LMSServiceInterface 
{
    public function users(): UserServiceInterface;
    public function courses(): CourseServiceInterface;
    public function enrollments(): EnrollmentServiceInterface;
    public function products(): ProductServiceInterface;
    public function orders(): OrderServiceInterface;
}
```

## Usage in Dashboard

### Type Hints

Change function parameters to use interfaces instead of concrete DTOs:

```php
// Before
function processUser(ThinkificUser $user) {
    return $user->first_name . ' ' . $user->last_name;
}

// After  
function processUser(UserInterface $user) {
    return $user->first_name . ' ' . $user->last_name; // Same code!
}
```

### Service Usage

Dashboard code remains identical regardless of provider:

```php
// Works with both Thinkific and Kajabi
$user = $lmsService->users()->get(123);
$enrollments = $lmsService->enrollments()->enrollmentsForUser($user->id);

foreach ($enrollments as $enrollment) {
    echo $enrollment->course_name; // Magic method access
}
```

### Create/Update DTOs

Create and update operations use constructor-based interfaces that match the exact Thinkific DTO signatures:

```php
// Dashboard code remains unchanged - both providers implement same constructor
$createUser = new CreateUser(
    first_name: 'John',
    last_name: 'Doe', 
    email: 'john@example.com',
    password: 'secret',
    skip_custom_fields_validation: true,
    send_welcome_email: true,
    custom_profile_fields: null,
    roles: ['student'],
    bio: null,
    company: 'ACME Corp',
    headline: null,
    affiliate_code: null,
    affiliate_commission: null,
    affiliate_commission_type: null,
    affiliate_payout_email: null,
    external_id: null,
    provider: null,
);

// Works with both Thinkific and Kajabi
$user = $lmsService->users()->create($createUser);

// Function parameters use interfaces for type safety
function createUser(CreateUserInterface $createUser, $lmsService) {
    return $lmsService->users()->create($createUser);
}
```

### Provider Switching

Switch providers by changing service instantiation:

```php
// Configuration-driven provider selection
$provider = config('lms.provider'); // 'thinkific' or 'kajabi'

if ($provider === 'thinkific') {
    $lmsService = new ThinkificService($apiKey, $subdomain);
} else {
    $lmsService = new KajabiService($apiKey, $subdomain);
}

// Rest of code works identically
```

## Available Interfaces

### DTO Interfaces
- `UserInterface`
- `CourseInterface` 
- `EnrollmentInterface`
- `ProductInterface`
- `OrderInterface`
- `BundleInterface`
- `CouponInterface`
- `CreateUserInterface`
- `UpdateUserInterface`
- `CreateEnrollmentInterface`
- `UpdateEnrollmentInterface`

### Service Interfaces
- `LMSServiceInterface`
- `UserServiceInterface`
- `CourseServiceInterface`
- `EnrollmentServiceInterface` 
- `ProductServiceInterface`
- `OrderServiceInterface`

## Implementation Requirements

### For Provider Packages

1. **Implement DTO Interfaces**: All DTOs must implement corresponding interfaces with magic methods
2. **Implement Service Interfaces**: All services must implement the service interfaces
3. **Property Compatibility**: Magic methods must support all properties listed in interface documentation
4. **Return Type Compliance**: Methods must return interface types, not concrete DTOs

### Implementation Examples

#### DTO Implementation (Magic Methods for Read DTOs)

```php
class ThinkificUser implements UserInterface
{
    // ... existing constructor and properties
    
    public function __get(string $name): mixed 
    {
        return match($name) {
            'id' => $this->id,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            // ... all other properties
            default => throw new InvalidArgumentException("Property {$name} does not exist")
        };
    }
    
    public function __isset(string $name): bool 
    {
        return in_array($name, [
            'id', 'first_name', 'last_name', 'email', 'password', 
            'roles', 'avatar_url', 'bio', 'company', 'headline',
            'external_source', 'affiliate_code', 'affiliate_commission',
            'affiliate_commission_type', 'affiliate_payout_email', 
            'custom_profile_fields'
        ]);
    }
    
    public function getFullName(): string 
    {
        // Existing implementation
        return trim($this->first_name . ' ' . $this->last_name) ?: $this->email;
    }
}
```

#### Create/Update DTO Implementation (Constructor-Based)

```php
class ThinkificCreateUser implements CreateUserInterface
{
    // Existing constructor already matches interface exactly!
    public function __construct(
        public string  $first_name,
        public string  $last_name,
        public string  $email,
        public ?string $password,
        public bool    $skip_custom_fields_validation,
        public bool    $send_welcome_email,
        public ?array  $custom_profile_fields,
        public ?array  $roles,
        public ?string $bio,
        public ?string $company,
        public ?string $headline,
        public ?string $affiliate_code,
        public ?int    $affiliate_commission,
        public ?string $affiliate_commission_type,
        public ?string $affiliate_payout_email,
        public ?string $external_id,
        public ?string $provider,
    ) {}
}

// Kajabi equivalent would have same exact constructor signature
class KajabiCreateUser implements CreateUserInterface
{
    public function __construct(
        public string  $first_name,
        public string  $last_name,
        public string  $email,
        public ?string $password,
        public bool    $skip_custom_fields_validation,  // May not use this
        public bool    $send_welcome_email,
        public ?array  $custom_profile_fields,         // May map to different fields
        public ?array  $roles,
        public ?string $bio,
        public ?string $company,
        public ?string $headline,
        public ?string $affiliate_code,                 // May ignore
        public ?int    $affiliate_commission,           // May ignore
        public ?string $affiliate_commission_type,      // May ignore  
        public ?string $affiliate_payout_email,         // May ignore
        public ?string $external_id,
        public ?string $provider,
    ) {
        // Kajabi implementation can ignore or transform fields as needed
    }
}
```

## Versioning

This package follows semantic versioning. Interface changes are considered breaking changes and will result in major version bumps.

## License

MIT