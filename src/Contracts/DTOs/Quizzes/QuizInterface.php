<?php

namespace WooNinja\LMSContracts\Contracts\DTOs\Quizzes;

/**
 * Interface for Quiz DTOs across LMS providers
 * 
 * Implementing classes must have the exact same constructor signature as Thinkific Quiz
 * with all public properties accessible directly (based on Thinkific Quiz):
 * - public int $id
 * - public string $name
 */
interface QuizInterface
{
    public function __construct(
        int    $id,
        string $name,
    );
}