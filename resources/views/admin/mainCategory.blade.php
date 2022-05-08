<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-7 p-10 items-center justify-center">
                <p class="md:text-7xl sm:text-4xl text-2xl uppercase font-bold font-serif text-blue-700">Main Caregory
                </p>
                <div class="my-7 py-10 items-center justify-center">
                    <form method="POST" action="
                     {{-- @if (isset($contacts)) {{ route('update_contacts') }}
                    @else
                    {{ route('save_contacts') }} @endif --}}
                    {{ route('saveMainCategory') }}
                    " class="w-full " enctype="multipart/form-data">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">

                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="name_en">
                                    name in english
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="name_en" name="name_en" type="text" placeholder="Category name english "
                                    value="{{ old('name_en') }}">
                                @error('name_en')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="description_en">
                                    description in english
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="description_en" name="description_en" type="text"
                                    placeholder="Category description english " value="{{ old('description_en') }}">
                                @error('description_en')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="name_ar">
                                    name in arabic
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="name_ar" name="name_ar" type="text" placeholder="أسم الفئة"
                                    {{-- value="@isset($contacts) {{ $contacts->name_ar }} @endisset" --}} {{-- value="{{old('title', $dog->title)}}" --}} value="{{ old('name_ar') }}"
                                    dir="rtl">
                                @error('name_ar')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="description_ar">
                                    description in arabic
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="description_ar" name="description_ar" type="text" placeholder="وصف الفئة "
                                    value="{{ old('description_ar') }}" dir="rtl">
                                @error('description_ar')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label for="file_img"
                                    class="form-label inline-block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Select
                                    Image</label>
                                <input
                                    class="form-control
                                    block
                                    w-full
                                    pe-3
                                    py-1.5
                                    text-base
                                    font-normal
                                    text-gray-700
                                    bg-white bg-clip-padding
                                    border border-solid border-gray-300
                                    rounded
                                    transition
                                    ease-in-out
                                    m-0
                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    type="file" id="file_img" name="file_img" accept="image/*">


                                @error('file_img')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <input
                                class="bg-blue-500 hover:bg-blue-700 mt-5 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit" value="Save 💾 ">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
