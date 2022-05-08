<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <p class="md:text-7xl sm:text-4xl text-2xl uppercase font-bold font-serif text-blue-700">Dashboard</p>
                {{-- start contacts --}}
                <div class="p-4 m-2 border-2 rounded-lg">
                    <p class="md:text-4xl sm:text-2xl text-xl uppercase font-bold font-serif text-blue-700">contacts
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

                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">google map :
                        </p>
                        <p class="md:text-xl sm:text-lg m-3  font-serif text-black">
                            @isset($contacts)
                                {{ $contacts->google_map }}
                            @endisset
                        </p>
                    </div>
                    <div class="flex">

                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">address english:
                        </p>
                        <p class="md:text-xl sm:text-lg m-3  font-serif text-black">
                            @isset($contacts)
                                {{ $contacts->address_en }}
                            @endisset
                        </p>
                    </div>
                    <div class="flex">

                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">address arabic:
                        </p>
                        <p class="md:text-xl sm:text-lg m-3  font-serif text-black">
                            @isset($contacts)
                                {{ $contacts->address_ar }}
                            @endisset
                        </p>
                    </div>
                </div>
                {{-- end contacts --}}

                {{-- start Main Categorys --}}
                <div class="p-4 m-2 border-2 rounded-lg">
                    <p class="md:text-4xl sm:text-2xl text-xl uppercase font-bold font-serif text-blue-700">main
                        categorys
                    </p>

                    @isset($mainCategorys)
                        @foreach ($mainCategorys as $mainCategory)
                            <div class="flex border-2 rounded-lg">

                                <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">Name:
                                </p>
                                <p class="md:text-xl sm:text-lg m-3  font-serif text-black">

                                    {{ $mainCategory->name_en }}

                                </p>
                            </div>
                        @endforeach
                    @else
                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">add main category to
                            show
                        </p>
                    @endisset

                </div>
                {{-- end Main Categorys --}}
                {{-- start Sub Categorys --}}
                <div class="p-4 m-2 border-2 rounded-lg">
                    <p class="md:text-4xl sm:text-2xl text-xl uppercase font-bold font-serif text-blue-700">sub
                        categorys
                    </p>

                    @isset($subCategorys)
                        @foreach ($subCategorys as $subCategory)
                            <div class="flex border-2 rounded-lg">

                                <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">Name:
                                </p>
                                <p class="md:text-xl sm:text-lg m-3  font-serif text-black">

                                    {{ $subCategory->name_en }}

                                </p>
                                <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">Main Category
                                    Name:
                                </p>
                                <p class="md:text-xl sm:text-lg m-3  font-serif text-black">

                                    @foreach ($mainCategorys as $mainCategory)
                                        @if ($mainCategory->id == $subCategory->main_categories_id)
                                            {{ $mainCategory->name_en }}
                                        @endif
                                    @endforeach

                                </p>
                            </div>
                        @endforeach
                    @else
                        <p class="md:text-2xl sm:text-xl m-3 text-lg uppercase font-serif text-black">add sub category to
                            show
                        </p>
                    @endisset

                </div>
                {{-- end Sub Categorys --}}
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
