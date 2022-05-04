<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <p class="md:text-7xl sm:text-4xl text-2xl uppercase font-bold font-serif text-blue-700">Dashboard💻</p>
                {{-- start contacts --}}
                <div class="p-4 m-2 border-2 rounded-lg">
                    <p class="md:text-4xl sm:text-2xl text-xl uppercase font-bold font-serif text-blue-700">contacts📔
                    </p>
                    <div class="flex">

                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">phone:
                        </p>
                        <p class="md:text-xl sm:text-lg m-3  font-serif text-black">
                            @isset($contacts)
                                {{ $contacts->phone }}
                            @endisset
                        </p>
                    </div>
                    <div class="flex">

                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">whatsapp:
                        </p>
                        <p class="md:text-xl sm:text-lg m-3  font-serif text-black">
                            @isset($contacts)
                                {{ $contacts->whatsapp }}
                            @endisset
                        </p>
                    </div>
                    <div class="flex">

                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">email:
                        </p>
                        <p class="md:text-xl sm:text-lg m-3  font-serif text-black">
                            @isset($contacts)
                                {{ $contacts->email }}
                            @endisset
                        </p>
                    </div>
                    <div class="flex">

                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">address:
                        </p>
                        <p class="md:text-xl sm:text-lg m-3  font-serif text-black">
                            @isset($contacts)
                                {{ $contacts->address }}
                            @endisset
                        </p>
                    </div>
                </div>
                {{-- end contacts --}}

            </div>
        </div>
    </div>
</x-app-layout>
