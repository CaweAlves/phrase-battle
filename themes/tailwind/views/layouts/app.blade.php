<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    @vite(['themes\tailwind/css/app.css', 'themes\tailwind/js/app.js'], 'tailwind')
</head>

<body class="font-sans antialiased overflow-clip">
    <div id="app" class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <div class="bg-white shadow h-screen max-h-screen flex-1 grid grid-cols-4 overflow-hidden">
            <aside class="h-screen overflow-scroll">
                <div class="bg-background text-foreground border-r p-4 overflow-auto">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-lg font-medium">Friends</h3>
                        <button
                            class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-10 w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="w-5 h-5">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <span class="sr-only">Add Friend</span>
                        </button>
                    </div>
                    <div class="grid gap-2">
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">John Doe</div>
                                <div class="text-xs text-muted-foreground">@johndoe</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Jane Doe</div>
                                <div class="text-xs text-muted-foreground">@janedoe</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                        <a class="flex items-center gap-2 p-2 rounded-md hover:bg-muted/50 transition-colors" href="#">
                            <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                <span
                                    class="flex h-full w-full items-center justify-center rounded-full bg-muted">JD</span>
                            </span>
                            <div class="grid gap-0.5">
                                <div class="font-medium">Bob Smith</div>
                                <div class="text-xs text-muted-foreground">@bobsmith</div>
                            </div>
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Page Content -->
            <main class="col-span-3">
                {{ $slot }}
            </main>
        </div>

    </div>
</body>

</html>