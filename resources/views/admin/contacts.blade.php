<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-7 p-10 items-center justify-center">
                {{-- <x-jet-welcome /> --}}
                <p class="md:text-8xl sm:text-4xl text-2xl uppercase font-bold font-serif text-blue-700">contacts :</p>

                <div class="m-7 p-10 items-center justify-center">

                    <form class="w-full max-w-lg">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="phone">
                                    Phone Number
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200
                                      {{-- border-red-500 --}}
                                    rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="phone" type="tel" placeholder="000-000-0000" name="phone" required>
                                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                            </div>
                            <div class=" w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="whatsapp">
                                    whatsapp Phone Number
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200
                                      {{-- border-red-500 --}}
                                    rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                    id="whatsapp" type="tel" placeholder="000-000-0000" name="whatsphone" required>
                                {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                            </div>
                            <div class="w-full md:w-1/2 px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="email">
                                    email
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="email" name="email" type="email" placeholder="example@mail.com">
                            </div>
                        </div>
                        {{-- <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-password">
                                    Password
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-password" type="password" placeholder="******************">
                                <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-city">
                                    City
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-city" type="text" placeholder="Albuquerque">
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-state">
                                    State
                                </label>
                                <div class="relative">
                                    <select
                                        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                        id="grid-state">
                                        <option>New Mexico</option>
                                        <option>Missouri</option>
                                        <option>Texas</option>
                                    </select>
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="grid-zip">
                                    Zip
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="grid-zip" type="text" placeholder="90210">
                            </div>
                        </div> --}}
                        <input
                            class="
                                    bg-blue-500 hover:bg-blue-700 mt-5 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit" value="Save 💾 ">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
