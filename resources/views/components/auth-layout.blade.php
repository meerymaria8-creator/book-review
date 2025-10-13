<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-[#3E2C23] min-h-screen flex items-center justify-center"> 
    <div class="mx-auto max-w-md min-w-[490px] px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-[#D2B48C]/90 p-8 rounded-2xl shadow-lg shadow-[#2b1b13]/50 border border-[#a8876a]/40">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
