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
                        Edit Loan
                    </div>
                    </br>
                    <form class="row g-3 needs-validation" action="{{ route('loans.update', $loan->id)}}" method="POST">
                        {{ method_field('PUT') }}
                        @csrf
                        <div class="col-md-4">
                            <label for="f_name" class="form-label">First name</label>
                            <input disabled type="text" class="form-control" id="f_name" name="f_name" required
                                value="{{ $loan->f_name }}">
                        </div>
                        <div class="col-md-4">
                            <label for="l_name" class="form-label">Last name</label>
                            <input disabled type="text" class="form-control" id="l_name" name="l_name" required
                                value="{{ $loan->l_name }}">
                        </div>
                        <div class="col-md-4">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <div class="input-group">
                                <input disabled type="date" class="form-control" id="birthdate" name="birthdate"
                                    required value="{{ $loan->birthdate }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="place" class="form-label">City</label>
                            <input disabled type="text" class="form-control" id="place" name="place" required
                                value="{{ $loan->place }}">
                        </div>

                        <div class="col-md-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input disabled type="text" class="form-control" id="phone" name="phone" required
                                value="{{ $loan->phone }}">
                        </div>

                        <div class="col-md-4">
                            <label for="nat_id" class="form-label">National ID</label>
                            <input disabled type="text" class="form-control" id="nat_id" name="nat_id" required
                                value="{{ $loan->nat_id }}">
                        </div>
                        <div class="col-md-4">
                            <label for="work_place" class="form-label">Work place</label>
                            <input disabled type="text" class="form-control" id="work_place" name="work_place" required
                                value="{{ $loan->work_place }}">
                        </div>
                        <div class="col-md-4">
                            <label for="monthly_income" class="form-label">Monthly income</label>
                            <input disabled type="text" class="form-control" id="monthly_income" name="monthly_income"
                                required value="{{ $loan->monthly_income }}">
                        </div>
                        <div class="col-md-4">
                            <label for="loan_type" class="form-label">Loan type</label>
                            <select class="form-select" id="loan_type" name="loan_type" required>
                                <option selected disabled value="{{ $loan->loan_type }}">{{ $loan->loan_type }}</option>
                                <option value="Commercial projects">Commercial projects</option>
                                <option value="Iskan">Iskan</option>
                                <option value="Car buying">Car buying</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="credit_card" class="form-label">Credit card type</label>
                            <input disabled type="text" class="form-control" id="credit_card" name="credit_card"
                                value="{{ $loan->credit_card }}">
                        </div>
                        <div class="col-md-3">
                            <label for="credit_card_name" class="form-label">Credit card holder name</label>
                            <input disabled type="text" class="form-control" id="credit_card_name"
                                name="credit_card_name" value="{{ $loan->credit_card_name }}">
                        </div>

                        <div class="col-md-3">
                            <label for="credit_card_expire" class="form-label">Credit card expire date</label>
                            <input disabled type="date" class="form-control" id="credit_card_expire"
                                name="credit_card_expire" value="{{ $loan->credit_card_expire }}">
                        </div>

                        <div class="col-md-3">
                            <label for="credit_card_monthly_income" class="form-label">Credit card monthly
                                income</label>
                            <input disabled type="text" class="form-control" id="credit_card_monthly_income"
                                name="credit_card_monthly_income" value="{{ $loan->credit_card_monthly_income }}">
                        </div>
                        <div class="col-md-3">
                                <label for="credit_card_monthly_income" class="form-label">Credit card monthly
                                    income</label>
                                <input  type="text" class="form-control" id="is_accepted" name="is_accepted"
                                    value="{{ $loan->is_accepted }}">
                            </div>
                        <div class="col-md-4">
                            <label for="isAccepted" class="form-label">is Accepted ?</label>
                            <select class="form-select" id="isAccepted" name="is_accepted" required>
                                <option selected disabled value="{{ $loan->is_accepted }}">{{ $loan->is_accepted }}
                                </option>
                                <option value="false">Not Accepted</option>
                                <option value="true">Accepted</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
