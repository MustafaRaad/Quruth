<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Loans') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="display-6">
                        Loan details
                    </div>
                    </br>
                    <form class="row g-3 needs-validation">
                        @csrf
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">First name</li>
                                <li class="list-group-item">{{ $loan->f_name }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Last name</li>
                                <li class="list-group-item">{{ $loan->l_name }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Birthdate</li>
                                <li class="list-group-item">{{ $loan->birthdate }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Place </li>
                                <li class="list-group-item">{{ $loan->place }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Phone</li>
                                <li class="list-group-item">{{ $loan->phone }}</li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">National ID</li>
                                <li class="list-group-item">{{ $loan->nat_id }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Work place </li>
                                <li class="list-group-item">{{ $loan->work_place }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Monthly income </li>
                                <li class="list-group-item">{{ $loan->monthly_income }}</li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Loan type </li>
                                <li class="list-group-item">{{ $loan->loan_type }}</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Credit card type </li>
                                <li class="list-group-item">{{ $loan->credit_card }}</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Credit card name</li>
                                <li class="list-group-item">{{ $loan->credit_card_name }}</li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Credit card expire </li>
                                <li class="list-group-item">{{ $loan->credit_card_expire }}</li>
                            </ul>
                        </div>

                        <div class="col-md-3">
                            <ul class="list-group">
                                <li class="list-group-item active" aria-current="true">Credit card monthly income </li>
                                <li class="list-group-item">{{ $loan->credit_card_monthly_income }}</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
