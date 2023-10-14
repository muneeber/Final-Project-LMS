<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in as Admin!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    {{-- First --}}
                    <div class="p-4 lg:w-1/3">
                        <a href="{{ Route('users') }}">
                            <div class="h-full bg-gray-300 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-800 mb-1">CATEGORY</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-black mb-3">Manage Users </h1>                            
                        </div>
                    </div>
                </a>
                    <div class="p-4 lg:w-1/3">
                        <a href="/"><div
                            class="h-full bg-gray-300 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-800 mb-1">CATEGORY</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-black mb-3">Doctors</h1>
                        </div>
                    </a>
                    </div>
                    <div class="p-4 lg:w-1/3">
                        <div
                            class="h-full bg-gray-300 bg-opacity-40 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                            <h2 class="tracking-widest text-xs title-font font-medium text-gray-800 mb-1">CATEGORY</h2>
                            <h1 class="title-font sm:text-2xl text-xl font-medium text-black mb-3">Selvage Poke
                                Waistcoat Godard</h1>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
