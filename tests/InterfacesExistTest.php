<?php

namespace WooNinja\LMSContracts\Tests;

use PHPUnit\Framework\TestCase;
use WooNinja\LMSContracts\Contracts\DTOs\Bundles\BundleInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Bundles\CreateBundleEnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Chapters\ChapterInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Coupons\CouponInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Coupons\CreateCouponInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Courses\CourseInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\CreateEnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\EnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Enrollments\UpdateEnrollmentInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Groups\GroupInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Instructors\InstructorInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Orders\OrderInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Products\ProductInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Promotions\CreatePromotionInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Promotions\PromotionInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Users\CreateUserInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Users\UpdateUserInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Users\UserInterface;
use WooNinja\LMSContracts\Contracts\DTOs\Webhooks\WebhookInterface;
use WooNinja\LMSContracts\Contracts\LMSServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\CourseServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\EnrollmentServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\OrderServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\ProductServiceInterface;
use WooNinja\LMSContracts\Contracts\Services\UserServiceInterface;

class InterfacesExistTest extends TestCase
{
    public function testDtoInterfacesExist(): void
    {
        $this->assertTrue(interface_exists(UserInterface::class));
        $this->assertTrue(interface_exists(CourseInterface::class));
        $this->assertTrue(interface_exists(EnrollmentInterface::class));
        $this->assertTrue(interface_exists(ProductInterface::class));
        $this->assertTrue(interface_exists(OrderInterface::class));
        $this->assertTrue(interface_exists(BundleInterface::class));
        $this->assertTrue(interface_exists(CouponInterface::class));
        $this->assertTrue(interface_exists(CreateUserInterface::class));
        $this->assertTrue(interface_exists(UpdateUserInterface::class));
        $this->assertTrue(interface_exists(CreateEnrollmentInterface::class));
        $this->assertTrue(interface_exists(UpdateEnrollmentInterface::class));
        $this->assertTrue(interface_exists(PromotionInterface::class));
        $this->assertTrue(interface_exists(InstructorInterface::class));
        $this->assertTrue(interface_exists(ChapterInterface::class));
        $this->assertTrue(interface_exists(WebhookInterface::class));
        $this->assertTrue(interface_exists(GroupInterface::class));
        $this->assertTrue(interface_exists(CreatePromotionInterface::class));
        $this->assertTrue(interface_exists(CreateCouponInterface::class));
        $this->assertTrue(interface_exists(CreateBundleEnrollmentInterface::class));
    }
    
    public function testServiceInterfacesExist(): void
    {
        $this->assertTrue(interface_exists(UserServiceInterface::class));
        $this->assertTrue(interface_exists(CourseServiceInterface::class));
        $this->assertTrue(interface_exists(EnrollmentServiceInterface::class));
        $this->assertTrue(interface_exists(ProductServiceInterface::class));
        $this->assertTrue(interface_exists(OrderServiceInterface::class));
        $this->assertTrue(interface_exists(LMSServiceInterface::class));
    }
    
    public function testInterfaceMethodsExist(): void
    {
        // Test UserInterface has required constructor and methods
        $userInterface = new \ReflectionClass(UserInterface::class);
        $this->assertTrue($userInterface->hasMethod('__construct'));
        $this->assertTrue($userInterface->hasMethod('getFullName'));
        
        // Test UserServiceInterface has required methods
        $userServiceInterface = new \ReflectionClass(UserServiceInterface::class);
        $this->assertTrue($userServiceInterface->hasMethod('get'));
        $this->assertTrue($userServiceInterface->hasMethod('users'));
        $this->assertTrue($userServiceInterface->hasMethod('create'));
        $this->assertTrue($userServiceInterface->hasMethod('findByEmail'));
        
        // Test LMSServiceInterface has required methods
        $lmsServiceInterface = new \ReflectionClass(LMSServiceInterface::class);
        $this->assertTrue($lmsServiceInterface->hasMethod('users'));
        $this->assertTrue($lmsServiceInterface->hasMethod('courses'));
        $this->assertTrue($lmsServiceInterface->hasMethod('enrollments'));
        $this->assertTrue($lmsServiceInterface->hasMethod('getProviderName'));
        $this->assertTrue($lmsServiceInterface->hasMethod('isConnected'));
    }
}