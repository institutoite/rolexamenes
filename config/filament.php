<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Dark Mode
    |--------------------------------------------------------------------------
    |
    | This option allows you to control whether dark mode is enabled by
    | default for users of the Filament admin panel.
    |
    */

    'dark_mode' => false, // Set true if you want to enable dark mode

    /*
    |--------------------------------------------------------------------------
    | Colors
    |--------------------------------------------------------------------------
    |
    | Here you can define the primary, secondary, and other colors that you
    | want to use throughout the Filament admin panel. You can customize
    | these to fit your branding or design.
    |
    */

    'colors' => [
        'primary' => '#007bff',  // Primary color
        'secondary' => '#6c757d',  // Secondary color
        'danger' => '#dc3545',  // Color for danger alerts
        'success' => '#28a745',  // Color for success alerts
        'warning' => '#ffc107',  // Color for warning alerts
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    |
    | Customize the appearance of the navigation sidebar, such as its colors,
    | background, and more.
    |
    */

    'navigation' => [
        'background' => '#343a40',  // Sidebar background color
        'text_color' => '#ffffff',  // Sidebar text color
    ],

    /*
    |--------------------------------------------------------------------------
    | Fonts
    |--------------------------------------------------------------------------
    |
    | Customize the fonts used in the Filament admin panel.
    |
    */

    'fonts' => [
        'primary' => 'Nunito, sans-serif',
        'secondary' => 'Roboto, sans-serif',
    ],
];
