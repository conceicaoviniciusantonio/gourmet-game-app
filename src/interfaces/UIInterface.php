<?php

namespace App\interfaces;

interface UIInterface
{
    public function makeQuestion(string $question): bool;
    public function makeInputQuestion(string $message): string;
    public function doWait(string $message): void;
    public function clear(): void;
}