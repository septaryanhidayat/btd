<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class UploadHelper
{
    public static function upload(?UploadedFile $file, string $folder = 'general'): ?string
    {
        if (!$file || !$file->isValid()) {
            return null;
        }

        $filename = time() . '_' . Str::random(8) . '.' . strtolower($file->getClientOriginalExtension());
        $targetDir = public_path('uploads/' . $folder);

        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0755, true);
        }

        $file->move($targetDir, $filename);

        return '/uploads/' . $folder . '/' . $filename;
    }
}
