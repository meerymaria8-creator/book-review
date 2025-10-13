<x-auth-layout :title="'Log in'">
    <form action="#" method="POST" class="space-y-6">
        <!-- User Name / Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-[#4B3621]">User Name</label>
            <div class="mt-2">
                <input id="email" name="email" type="email" value="{{ old('email') }}" required autocomplete="email"
                       class="block w-full rounded-md border border-[#bfa27a] bg-[#fffaf2] px-3 py-2 text-[#4B3621] placeholder:text-[#a88c6a] focus:border-[#8B6E4E] focus:ring-2 focus:ring-[#8B6E4E]/40" />
            </div>
            @error('email')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div>
            <label for="password" class="block text-sm font-medium text-[#4B3621]">Password</label>
            <div class="mt-2 flex justify-between items-center">
                <div x-data="{ show: false }" class="relative w-full">
                    <input id="password"
                           :type="show ? 'text' : 'password'"
                           name="password"
                           required autocomplete="current-password"
                           class="block w-full rounded-md border border-[#bfa27a] bg-[#fffaf2] px-3 py-2 text-[#4B3621] placeholder:text-[#a88c6a] focus:border-[#8B6E4E] focus:ring-2 focus:ring-[#8B6E4E]/40"
                    >
                    <button type="button"
                            @click="show = !show"
                            class="absolute inset-y-0 right-0 flex items-center px-3 text-[#7A5E3B]"
                            tabindex="-1">
                        <svg x-show="!show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.478 0-8.268-2.943-9.542-7z"/>
                        </svg>
                        <svg x-show="show" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13.875 18.825a9.56 9.56 0 01-1.875.175c-4.478 0-8.268-2.943-9.542-7 1.002-3.364 3.843-6 7.542-7.575M15 12a3 3 0 00-6 0 3 3 0 006 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 3l18 18"/>
                        </svg>
                    </button>
                </div>
                <a href="#" class="ml-4 text-sm font-semibold text-[#7A5E3B] hover:text-[#5E472C]">Forgot your password?</a>
            </div>
            @error('password')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit"
                    class="flex w-full justify-center rounded-md bg-[#8B6E4E] px-3 py-2 text-sm font-semibold text-[#F5EFE6] hover:bg-[#7A5E3B] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#8B6E4E]">
                Log in
            </button>
        </div>

        <!-- Signup Link -->
        <p class="mt-6 text-center text-sm text-[#4B3621]/80">
            Don't have an account?
            <a href="{{ route('auth.signup') }}" class="font-semibold text-[#7A5E3B] hover:text-[#5E472C]">Sign up</a>
        </p>
    </form>
</x-auth-layout>
