<x-layout :title="'Books'">
    <main >
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <!--Flash Messages-->
            @if (session('create'))
            <div>
                <p class="text-brown-800 font-semibold border-2 border-brown-600 px-3 py-1 rounded-md bg-yellow-100">
                    {{ session('create') }}
                </p>
            </div>
            @elseif (session('update'))
            <div>
                    <p class="text-[#f5e0c3] font-semibold border-2 border-[#5a3e2b] px-3 py-1 rounded-md bg-[#3f2e2e] hover:bg-[#5a3e2b] transition"
>
                        {{ session('update') }}
                    </p>
            </div>
            @elseif (session('delete'))
            <div>
                    <p class="text-red-500 font-semibold border-2 border-red-600 px-3 py-1 rounded-md bg-red-950">
                        {{ session('delete') }}
                    </p>
            </div>
            <!-- هذا الكود لعرض فلاش مسج  للمستخدم 
             بتكون جاءت من الكنترولير اذا تمت عملية الحذف او الابديت  بنجاح -->
            @endif
                <!-- السيشين هون داله تسمح لي اجيب قيمة مخزنة موقتا
                الكرييت  مكان ظهور الرسالة 
                اذا ما في رساله ما حيطلع شيء
                باختصار يظهر للمستخدم رسلة نجاح  اذا فيه-->
            <div class="flex justify-end mb-4">
                <a href="{{ route('books.create') }}" 
                    class="bg-[#f5e0c3] text-[#3f2e2e] font-semibold border-2 border-[#a98357] px-3 py-1 rounded-md hover:bg-[#e0c3a9] hover:text-[#3f2e2e] transition-colors duration-300">
                    Create
                </a>
            </div>
            @forelse ($books as $book)
            <!-- ااذا في كتب مخزنة داخل المتغير يعمل لوب-->
            <div class="flex justify-end mt-2 space-x-2 max-w-[calc(100%-2rem)] mx-auto">
             
            <a href="{{ route('books.edit', $book->id) }} "
                    class="px-3 py-1 bg-[#3f2e2e] text-[#f5e0c3] rounded hover:bg-[#5a3e2b] transition">Edit</a>
                    
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" 
                class="inline" onsubmit="return confirm('Are you sure you want to delete this book? This action cannot be undone');">
                @csrf
                @method('DELETE')
                <button type="submit" 
                    class="px-3 py-1 bg-[#3f2e2e] text-[#f5e0c3] rounded hover:bg-red-700 transition">Delete
                </button>
            </form>
            </div>
            <a href="{{ route('books.show', $book->id) }}"
                class="block bg-[#f5e0c3] p-8 rounded-md grid grid-cols-6 gap-4 mb-4 border-2 border-transparent shadow-lg shadow-[#3f2e2e]/50 hover:shadow-2xl hover:shadow-[#5a3e2b]/80 hover:border-[#8B4513] transition-all duration-300">
                <div class="col-start-1 col-end-3">
                    <h1 class="text-[#3f2e2e] text-2xl font-bold mb-3">{{ $book->title }}</h1>
                    <p class="text-[#3f2e2e]/70 text-sm">Author: {{ $book->author }}</p>
                </div>
            </a>
            @empty
            <!--اذا ما في كتب يعرض لي هاي -->
                <h1 class="text-[#3f2e2e] text-2xl font-bold mb-3">No books yet!</h1>
            @endforelse
            <!--  لو في كتب يعرضهم واحد واحد  مع اسم الكاتب والكتاب  لو ما في يعطيني مما في -->
        </div>
    </main>
</x-layout>
