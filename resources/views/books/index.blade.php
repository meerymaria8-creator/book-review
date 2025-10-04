<x-layout :title="'Books'">
    <main class="min-h-screen bg-gradient-to-b from-[#5a3e2b] via-[#f5e0c3] to-[#f5e0c3]">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            @if (session('create'))
            <div>
                <p cclass="text-brown-800 font-semibold border-2 border-brown-600 px-3 py-1 rounded-md bg-yellow-100">
                    {{ session('create') }}
                </p>
            </div>
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
            <div class="bg-[#f5e0c3] p-8 rounded-md grid grid-cols-6 gap-4 mb-4 shadow-lg shadow-[#3f2e2e]/30">

                
                <div class="col-start-1 col-end-3">
                    <h1 class="text-[#3f2e2e] text-2xl font-bold mb-3">{{ $book->title }}</h1>
                    <p class="text-[#3f2e2e]/70 text-sm">Author: {{ $book->author }}</p>
                <!--نعرض اسم الكتاب والمولف لكل كتاب  --> 
                </div>
                <div class="flex-inline justify-self-end col-span-2 col-end-7 mt-5 space-x-4">
                    <a href="" class="text-[#a98357] hover:text-[#8b6b4a]">Edit</a>
                    <a href="" class="text-[#b85e3c] hover:text-[#8b3e21]">Delete</a>
                </div>
            </div>
            @empty
            <!--اذا ما في كتب يعرض لي هاي -->
                <h1 class="text-[#3f2e2e] text-2xl font-bold mb-3">No books yet!</h1>
            @endforelse
            <!--  لو في كتب يعرضهم واحد واحد  مع اسم الكاتب والكتاب  لو ما في يعطيني مما في -->
        </div>
    </main>
</x-layout>
