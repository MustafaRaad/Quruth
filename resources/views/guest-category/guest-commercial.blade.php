<x-guest-layout>
    <div class="relative flex flex-col justify-center sm:items-center sm:pt-0">

        <div class="mt-3 text-center w-100 py-3 bg-white rounded-sm shadow-md">
            Loans application and management system
        </div>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}"
                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h1 class="display-6">Commercial projects loan details</h1>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam amet, dolore debitis delectus
                        voluptatem dignissimos. Quo atque, odit eveniet sed nemo, quis similique, saepe consequatur
                        quibusdam dolores inventore! Quod, molestiae.

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam amet, dolore debitis delectus
                        voluptatem dignissimos. Quo atque, odit eveniet sed nemo, quis similique, saepe consequatur
                        quibusdam dolores inventore! Quod, molestiae.

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam amet, dolore debitis delectus
                        voluptatem dignissimos. Quo atque, odit eveniet sed nemo, quis similique, saepe consequatur
                        quibusdam dolores inventore! Quod, molestiae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam amet, dolore debitis delectus
                        voluptatem dignissimos. Quo atque, odit eveniet sed nemo, quis similique, saepe consequatur
                        quibusdam dolores inventore! Quod, molestiae.
                        <div class="w-full bg-white rounded-lg shadow-lg lg:w-1/3">
                            <ul class="divide-y-2 divide-gray-100">
                                <li class="p-3 hover:bg-blue-600 hover:text-blue-200">
                                    List Item 1
                                </li>
                                <li class="p-3 hover:bg-blue-600 hover:text-blue-200">
                                    List Item 2
                                </li>
                                <li class="p-3 hover:bg-blue-600 hover:text-blue-200">
                                    List Item 3
                                </li>
                                <li class="p-3 hover:bg-blue-600 hover:text-blue-200">
                                    List Item 4
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
