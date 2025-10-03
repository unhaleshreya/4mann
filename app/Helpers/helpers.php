<?php

if (!function_exists('storage_url')) {
    function storage_url($path)
    {
        if (!$path) {
            return null;
        }

        // If path starts with "storage/" → convert back to "storage/app/public/"
        if (str_starts_with($path, 'storage/')) {
            $relativePath = str_replace('storage/', 'storage/app/public/', $path);
            return asset($relativePath);
        }
        if (str_starts_with($path, '/storage'.'/')) {
            $relativePath = str_replace('/storage'.'/', 'storage/app/public/', $path);
            return asset($relativePath);
        }
        // If path already has "storage/app/public" → keep as-is
        if (str_starts_with($path, 'storage/app/public')) {
            return asset($path);
        }

        // Otherwise return as-is (maybe external URL)
        return $path;
    }
}
