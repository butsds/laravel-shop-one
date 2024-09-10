<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @routes
    @vite(['resources/admin/js/app.ts', "resources/admin/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body>
    @inertia
</body>
</html>