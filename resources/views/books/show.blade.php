<x-layout :title="$book->title">
    <main class="bg-[#F5EFE6] min-h-screen flex justify-center items-start py-10 px-4">
        <div class="max-w-5xl w-full bg-[#D2B48C]/80 rounded-2xl shadow-lg p-6 flex flex-col gap-6">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl font-serif font-bold text-[#4B2E2E] mb-4">{{ $book->title }}</h1>
            </div>
            <div class="text-center">
                <p class="text-[#4B2E2E] mb-6 line-clamp-5">{{ $book->description }}</p>
            </div>
            <div class="text-right text-[#5C4033] text-lg font-medium">
                author: <span class="font-semibold">{{ $book->author }}</span>
            </div>
            <div class="flex flex-wrap justify-center gap-4 mt-4">
                <a href="{{ route('books.index') }}"
                   class="px-4 py-2 bg-[#8B4513] text-white rounded-md hover:bg-[#5C2E1A] transition">Back to the library</a>
                <a href="#reviews"
                   class="px-4 py-2 bg-[#A0522D] text-white rounded-md hover:bg-[#6E2F14] transition">reviews</a>
            </div>
        </div>
    </main>
</x-layout>
