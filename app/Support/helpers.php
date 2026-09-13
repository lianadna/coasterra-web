<?php

use App\Models\Setting;

if (! function_exists('setting')) {
    /**
     * Read a site setting managed from the admin panel.
     */
    function setting(string $key, ?string $default = null): ?string
    {
        $value = Setting::all_values()[$key] ?? null;

        return ($value === null || $value === '') ? $default : $value;
    }
}

if (! function_exists('setting_lines')) {
    /**
     * Read a multi-line setting as a list, one item per non-empty line.
     *
     * @return list<string>
     */
    function setting_lines(string $key, array $default = []): array
    {
        $raw = setting($key);

        if ($raw === null) {
            return $default;
        }

        $lines = array_values(array_filter(array_map('trim', preg_split('/\R/', $raw))));

        return $lines ?: $default;
    }
}
