<x-layout :title="$book->title">
    <main class="bg-gradient-to-b from-[#fdf6e3] to-[#f5efe6] min-h-screen flex justify-center items-start py-10 px-4">
        <div class="max-w-6xl w-full flex flex-col md:flex-row gap-8 bg-white rounded-3xl shadow-xl p-6">

            <!-- القسم الأيسر: معلومات الكتاب -->
            <div class="md:w-1/3 flex flex-col items-center gap-4">
                {{-- مكان لغلاف الكتاب --}}
                <div class="w-full h-64 bg-[#D2B48C]/50 rounded-xl shadow-md flex items-center justify-center text-2xl font-bold text-[#4B2E2E]">
                    {{ $book->title }}
                </div>

                <h1 class="text-2xl font-serif font-bold text-[#4B2E2E] text-center mt-4">{{ $book->title }}</h1>
                <p class="text-[#5C4033] text-center line-clamp-6">{{ $book->description }}</p>
                <p class="text-[#8B4513] font-semibold mt-2">Author: {{ $book->author }}</p>

                <!-- أزرار العودة والمراجعات -->
                <div class="flex gap-4 mt-4">
                    <a href="{{ route('books.index') }}"
                       class="px-6 py-2 bg-[#8B4513] text-white rounded-full hover:bg-[#5C2E1A] transition">Back to Library</a>
                    <a href="{{ route('reviews.index') }}"
                       class="px-6 py-2 bg-[#A0522D] text-white rounded-full hover:bg-[#6E2F14] transition">All Reviews</a>
                </div>
            </div>

            <!-- القسم الأيمن: إضافة وعرض المراجعات -->
            <div class="md:w-2/3 flex flex-col gap-6">

                <!-- رسائل النجاح والخطأ -->
                @if(session('create'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 rounded-md">
                        {{ session('create') }}
                    </div>
                @elseif(session('delete'))
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 rounded-md">
                        {{ session('delete') }}
                    </div>
                @endif

                <!-- نموذج إضافة مراجعة -->
                <div class="bg-[#D2B48C]/30 p-4 rounded-xl shadow-inner">
                    <h3 class="text-[#4B2E2E] text-lg font-semibold mb-2">Add a Review</h3>
                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">

                        <textarea name="content" id="content" rows="4"
                                  class="w-full rounded-md p-3 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-[#8B4513] resize-none"
                                  placeholder="Write your review...">{{ old('content') }}</textarea>
                        @error('content')
                            <p class="mt-2 text-red-600">{{ $message }}</p>
                        @enderror

                        <div class="flex justify-end mt-3">
                            <button type="submit" class="px-4 py-2 bg-[#8B4513] text-white rounded-md hover:bg-[#5C2E1A] transition">Add Review</button>
                        </div>
                    </form>
                </div>

                <!-- عرض المراجعات -->
                <div class="flex flex-col gap-4">
                    @forelse($book->reviews as $review)
                        <div class="bg-[#D2B48C]/20 p-4 rounded-xl shadow-md flex justify-between items-start gap-4">
                            <div>
                                <p class="text-[#4B2E2E] font-medium">{{ $review->content }}</p>
                                <p class="text-[#5C4033] text-sm mt-1">— {{ $review->author }}</p>
                            </div>
                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 transition">
                                    🗑️
                                </button>
                            </form>
                        </div>
                    @empty
                        <p class="text-[#4B2E2E] text-center p-4 bg-[#D2B48C]/20 rounded-xl shadow-md">No reviews yet!</p>
                    @endforelse
                </div>

            </div>
        </div>
    </main>
</x-layout>
