<x-guest-layout>
    <div class="relative flex flex-col justify-center sm:items-center sm:pt-0">

        <div class="mt-3 text-center w-100 py-3 bg-white rounded-sm shadow-md">
            Loans application and management system
        </div>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
        </div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                @foreach($LoansGuest as $category)
                                <button class="nav-link" id="{{$category->name}}-tab" data-bs-toggle="tab"
                                    data-bs-target="#{{$category->name}}" type="button" role="tab"
                                    aria-controls="{{$category->name}}"
                                    aria-selected="true">{{$category->name}}</button>
                                @endforeach
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach($LoansGuest as $category)
                            <div class="tab-pane fade show " id="{{$category->name}}" role="tabpanel"
                                aria-labelledby="{{$category->name}}-tab">{{$category->description}}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </div>
</x-guest-layout>
