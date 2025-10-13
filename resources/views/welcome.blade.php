<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <style>
    body {
      background: radial-gradient(at 20% 40%, #8b5e3c 0%, transparent 60%), 
                  radial-gradient(at 80% 70%, #d1a054 0%, transparent 50%),
                  radial-gradient(at 50% 10%, #f5deb3 0%, transparent 40%),
                  #3f2e2e;
    }
  </style>
</head>
<body class="min-h-screen font-serif">

<div class="relative z-10 text-center flex items-center justify-center min-h-screen">
  <div x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)">
    
    <div x-cloak x-show="show"
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100">
      <h1 class="text-sm text-yellow-200/80 bg-brown-800/40 rounded-full px-4 py-1 w-fit mx-auto mb-3">
         Cozy Reading Nook
      </h1>
    </div>

    <div x-cloak x-show="show"
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100">
      <div class="text-5xl md:text-6xl font-bold mb-6 tracking-tight italic text-yellow-100">
        <h1>Brew Your Coffee</h1>
        <h1>Dive Into Your Review</h1>
      </div>
    </div>

    <div x-cloak x-show="show"
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100">
      <p class="text-yellow-200/90 mb-6">Discover new stories, share your thoughts, and let your words warm the soul</p>
    </div>

    <div x-cloak x-show="show"
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0 scale-90"
         x-transition:enter-end="opacity-100 scale-100">
      <a href="{{ route ('auth.login')}}" class="text-yellow-50 bg-brown-700 px-5 py-2 rounded-lg hover:bg-brown-600 shadow-md shadow-yellow-900/30">Login</a>

      <a href="{{ route ('books.index')}}" class="text-brown-900 bg-yellow-300/80 px-5 py-2 rounded-lg hover:bg-yellow-200 shadow-md shadow-yellow-800/20">Explore Books →</a>
    </div>
  </div>
</div>

</body>
</html>
