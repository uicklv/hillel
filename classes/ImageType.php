<?php

enum ImageType: string
{
    case JPG = 'jpg';
    case JPEG = 'jpeg';
    case PNG = 'png';
    case WEBP = 'webp';

    public static function values(): array
    {
        $cases = self::cases();
        $values = [];
        foreach ($cases as $case) {
            $values[] = $case->value;
        }

        return $values;
    }

    public static function getImageCreateFunction(string $currentFormat): string
    {
        return match ($currentFormat) {
            'png' => 'imagecreatefrompng',
            'webp' => 'imagecreatefromwebp',
            default => 'imagecreatefromjpeg'
        };
    }

    public static function getImageSaveFunction(string $newFormat): string
    {
        return match ($newFormat) {
            'png' => 'imagepng',
            'webp' => 'imagewebp',
            default => 'imagejpeg'
        };
    }
}