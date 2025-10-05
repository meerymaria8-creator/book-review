<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>{{ $title ?? 'Book Review' }}</title>
</head>
<body class="min-h-screen bg-gradient-to-b from-[#4b3621] via-[#a98357] to-[#f5e0c3] text-[#3f2e2e] bg-fixed">


    <!-- Navigation -->
    <nav class="bg-[#3f2e2e]/90 mt-1">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 border border-[#3f2e2e]/20 rounded-full">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <h1 class="text-[#f5e0c3] font-medium px-3 py-2 bg-[#a98357]/70 rounded-full"> 🕮 Book Review</h1>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4 relative z-50">
                            <x-nav-link href="{{ route('books.index') }}" :active="request()->routeIs('books.index')">Books</x-nav-link>
                            <x-nav-link href="{{ route('reviews.index') }}" :active="request()->routeIs('reviews.index')">My Reviews</x-nav-link>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="" class="text-[#3f2e2e] bg-[#f5e0c3]/70 rounded-md px-3 py-2 text-sm font-medium hover:bg-[#f5e0c3]/100">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    
    <header class="relative bg-gradient-to-r from-[#3f2e2e]/80 via-[#5a3e2b]/70 to-[#3f2e2e]/80 after:pointer-events-none after:absolute after:inset-x-0 after:inset-y-0">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-[#f5e0c3]">{{ $title }}</h1>
        </div>
    </header>

  
    {{ $slot }}

</div>
</body>
</html>
