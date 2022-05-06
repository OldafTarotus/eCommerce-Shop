<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-7 p-10 items-center justify-center">
                <p class="md:text-7xl sm:text-4xl text-2xl uppercase font-bold font-serif text-blue-700">contacts📔</p>
                <div class="my-7 py-10 items-center justify-center">
                    <form method="POST" action="
                    @if (isset($contacts)) {{ route('update_contacts') }}
                    @else
                    {{ route('save_contacts') }} @endif

                    " class="w-full ">
                        @csrf
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="phone">
                                    Phone Number
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200
                                      {{-- border-red-500 --}}
                                    rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="phone" type="tel" placeholder="000-000-0000" name="phone"
                                    value="@isset($contacts) {{ $contacts->phone }} @endisset">
                                @error('phone')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class=" w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="whatsapp">
                                    whatsapp Phone Number
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200
                            rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="whatsapp" type="tel" placeholder="000-000-0000" name="whatsapp"
                                    value="@isset($contacts) {{ $contacts->whatsapp }} @endisset">
                                @error('whatsapp')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="email">
                                    email
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200
                        rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="email" name="email" type="email" placeholder="example@mail.com"
                                    value="@isset($contacts) {{ $contacts->email }} @endisset">
                                @error('email')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full md:w-1/2 px-3 py-5 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="address">
                                    address
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="address" name="address" type="text" placeholder="Street Address "
                                    value="@isset($contacts) {{ $contacts->address }} @endisset">
                                @error('address')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
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
