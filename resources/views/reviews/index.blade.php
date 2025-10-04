<x-layout :title="'My Reviews'">
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <div class="bg-[#4b3621]/80 p-8 rounded-lg grid grid-cols-6 gap-4 mb-4 shadow-lg shadow-[#3f2e2e]/70">
                
                <div class="col-start-1 col-end-4">
                    <h1 class="text-[#f5e0c3] text-2xl font-bold mb-2">Review content</h1>
                    <a href="#" class="text-[#f5e0c3]/60 text-sm hover:text-[#f5e0c3]/90">Book Title</a>
                </div>
                
                <div class="flex items-center justify-end col-span-2 col-end-7">
                    <a href="#"
                       class="px-5 py-2 text-sm font-medium rounded-md 
                              bg-[#8b0000] text-[#f5e0c3] shadow-md
                              hover:bg-[#a00000] hover:shadow-[#8b0000]/50
                              transition">
                        Delete
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-layout>
