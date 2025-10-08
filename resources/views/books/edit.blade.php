<x-layout :title="'Edit Book'">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-yellow-50/90 p-8 rounded-lg shadow-lg shadow-yellow-900/30 font-serif">
                <form method="POST" action="{{ route('books.update', $book->id) }}">
                    <!--ميثود ارسال البيانات والاكشن لوجهتها -->
                    <!-- البوست لتحديث البيانات  مع ميثود بوت-->
                    <!--البوك ارو اي دي لنعرف اي كتاب عم نعدل عليه -->
                    @csrf
                    <!-- هذا لحمايةالبيانات من الهجمات الخارجية -->
                    @method('PUT')
                    <!--لان اتش تي ان ال لا تدعم البوت التحديث على البيانات مباشرة هاي بتعرف اللارفيل ان الفورم هذا لتحديث البيانات -->
                    <div class="space-y-12">
                        <div class="border-b border-yellow-200/40 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="sm:col-span-3">
                                    <label for="title" class="block text-sm font-semibold text-brown-900">Title</label>
                                    <div class="mt-2">
                                        <input id="title" type="text" name="title" value="{{ $book->title }}"
                                            autocomplete="title"
                                            class="block w-full rounded-md bg-yellow-100 px-3 py-2 text-brown-900 placeholder:text-brown-500 outline-2 focus:outline-2 focus:outline-offset-2 sm:text-sm shadow-inner shadow-yellow-200/50
                                            {{ $errors->has('title') ? 'outline-red-600 placeholder:text-red-400 focus:outline-red-500' : 'outline-yellow-300 focus:outline-yellow-700' }}" />
                                    </div>
                                    @error('title')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="author" class="block text-sm font-semibold text-brown-900">Author</label>
                                    <div class="mt-2">
                                        <input id="author" type="text" name="author" value="{{ $book->author }}"
                                            autocomplete="author"
                                            class="block w-full rounded-md bg-yellow-100 px-3 py-2 text-brown-900 placeholder:text-brown-500 outline-2 focus:outline-2 focus:outline-offset-2 sm:text-sm shadow-inner shadow-yellow-200/50
                                            {{ $errors->has('author') ? 'outline-red-600 placeholder:text-red-400 focus:outline-red-500' : 'outline-yellow-300 focus:outline-yellow-700' }}" />
                                    </div>
                                    @error('author')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <label for="description" class="block text-sm font-semibold text-brown-900">Description</label>
                                    <div class="mt-2">
                                        <textarea id="description" name="description" rows="4"
                                        class="block w-full rounded-md bg-yellow-100 px-3 py-2 text-brown-900 placeholder:text-brown-500 outline-2 focus:outline-2 focus:outline-offset-2 sm:text-sm shadow-inner shadow-yellow-200/50
                                        {{ $errors->has('description') ? 'outline-red-600 placeholder:text-red-400 focus:outline-red-500' : 'outline-yellow-300 focus:outline-yellow-700' }}">{{ $book->description }}</textarea>

                                    </div>
                                    @error('description')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                    <p class="mt-3 text-sm text-brown-600 italic">Write a few sentences about the book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="{{ route('books.index') }}" type="button"
                    class="text-sm font-semibold text-brown-900 hover:text-yellow-300 underline transition-colors duration-200">
                    Cancel
                    </a>
                    <button type="submit"
                    class="text-sm font-semibold text-brown-900 hover:text-yellow-300 underline transition-colors duration-200">
                    Save
                    </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</x-layout>
