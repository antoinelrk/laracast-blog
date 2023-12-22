<?php

namespace App\Traits;

trait FakerTrait
{
    public static function formatParagraphs(array $paragraphs): string
    {
        $editedParagraphs = collect($paragraphs)
            ->map(function ($paragraph, $index) {
                
                if ($index == 0) {
                    return "<p>{$paragraph}</p>";
                }

                return "<p class=\"mt-4\">{$paragraph}</p>";
            })->toArray();



        return implode(" ", $editedParagraphs);
    }
}