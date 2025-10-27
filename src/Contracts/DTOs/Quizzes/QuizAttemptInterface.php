<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Quizzes;

use Carbon\Carbon;
use WooNinja\LMSContracts\Contracts\DTOs\Users\UserInterface;

/**
 * Interface for QuizAttempt DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific QuizAttempt
 * with all public properties accessible directly (based on Thinkific QuizAttempt):
 * - public int $attempts
 * - public int $correct_count
 * - public int $grade
 * - public int $incorrect_count
 * - public int $result_id
 * - public UserInterface $user
 * - public QuizInterface $quiz
 * - public Carbon $created_at
 * - public Carbon $updated_at
 */
interface QuizAttemptInterface
{
    public function __construct(
        int  $attempts,
        int  $correct_count,
        int  $grade,
        int  $incorrect_count,
        int  $result_id,
        UserInterface $user,
        QuizInterface $quiz,
        Carbon $created_at,
        Carbon $updated_at,
    );
}