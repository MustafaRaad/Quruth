<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-center bg-white border-b border-gray-200">
                    <div class="border py-12 px-4 sm:px-6 lg:py-16 lg:px-8 row justify-center">
                        <h2 class="col-6 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            <span class="block">Commercial Projects Loan</span>
                        </h2>
                        <div class="col-4 justify-center mt-8 flex lg:mt-0 lg:flex-shrink-0">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('loan-com') }}"
                                    class="btn btn-primary  px-5 py-3 border border-transparent text-base font-medium rounded-md bg-indigo-600 hover:bg-indigo-700">
                                    Choose </a>
                            </div>
                        </div>
                    </div>

                    <div class="border py-12 px-4 sm:px-6 lg:py-16 lg:px-8 row justify-center">
                        <h2 class="col-6 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            <span class="block">Iskan Loan</span>
                        </h2>
                        <div class="col-4 justify-center mt-8 flex lg:mt-0 lg:flex-shrink-0">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('loan-iskan') }}"
                                    class="btn btn-primary  px-5 py-3 border border-transparent text-base font-medium rounded-md bg-indigo-600 hover:bg-indigo-700">
                                    Choose </a>
                            </div>
                        </div>
                    </div>

                    <div class="border py-12 px-4 sm:px-6 lg:py-16 lg:px-8 row justify-center">
                        <h2 class="col-6 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                            <span class="block">Car buying Loan</span>
                        </h2>
                        <div class="col-4 justify-center mt-8 flex lg:mt-0 lg:flex-shrink-0">
                            <div class="inline-flex rounded-md shadow">
                                <a href="{{ route('loan-car') }}"
                                    class="btn btn-primary  px-5 py-3 border border-transparent text-base font-medium rounded-md bg-indigo-600 hover:bg-indigo-700">
                                    Choose </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</x-app-layout>
