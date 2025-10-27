<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Courses;

/**
 * Interface for Course DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Course
 * with all public properties accessible directly (based on Thinkific Course):
 * - public int $id
 * - public string $name
 * - public string $slug
 * - public ?string $subtitle
 * - public int $product_id
 * - public ?string $description
 * - public ?string $course_card_text
 * - public ?string $intro_video_youtube
 * - public ?string $contact_information
 * - public ?string $keywords
 * - public ?int $duration
 * - public string $banner_image_url
 * - public string $course_card_image_url
 * - public ?string $intro_video_wistia_identifier
 * - public array $administrator_user_ids
 * - public array $chapter_ids
 * - public bool $reviews_enabled
 * - public ?int $user_id
 * - public ?int $instructor_id
 */
interface CourseInterface
{
    public function __construct(
        int         $id,
        string      $name,
        string      $slug,
        string|null $subtitle,
        int         $product_id,
        ?string     $description,
        ?string     $course_card_text,
        ?string     $intro_video_youtube,
        ?string     $contact_information,
        ?string     $keywords,
        ?int        $duration,
        string      $banner_image_url,
        string      $course_card_image_url,
        ?string     $intro_video_wistia_identifier,
        array       $administrator_user_ids,
        array       $chapter_ids,
        bool        $reviews_enabled,
        ?int        $user_id,
        ?int        $instructor_id,
    );
}
