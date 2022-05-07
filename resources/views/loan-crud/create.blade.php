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
                    <form class="row g-3 needs-validation" action="{{ route('loans.store')}}" method="POST">
                        @csrf
                        <div class="col-md-4">
                            <label for="f_name" class="form-label">First name</label>
                            <input type="text" class="form-control" id="f_name" name="f_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="l_name" class="form-label">Last name</label>
                            <input type="text" class="form-control" id="l_name" name="l_name" required>
                        </div>
                        <div class="col-md-4">
                            <label for="birthdate" class="form-label">Birthdate</label>
                            <div class="input-group">
                                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="place" class="form-label">City</label>
                            <input type="text" class="form-control" id="place" name="place" required>
                        </div>

                        <div class="col-md-4">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="col-md-4">
                            <label for="nat_id" class="form-label">National ID</label>
                            <input type="text" class="form-control" id="nat_id" name="nat_id" required>
                        </div>
                        <div class="col-md-4">
                            <label for="work_place" class="form-label">Work place</label>
                            <input type="text" class="form-control" id="work_place" name="work_place" required>
                        </div>
                        <div class="col-md-4">
                            <label for="monthly_income" class="form-label">Monthly income</label>
                            <input type="text" class="form-control" id="monthly_income" name="monthly_income" required>
                        </div>
                        <div class="col-md-4">
                            <label for="loan_type" class="form-label">Loan type</label>
                            <select class="form-select" id="loan_type" name="loan_type" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="Commercial projects" >Commercial projects</option>
                                <option value="Iskan">Iskan</option>
                                <option value="Car buying">Car buying</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="credit_card" class="form-label">Credit card type</label>
                            <input type="text" class="form-control" id="credit_card" name="credit_card">
                        </div>
                        <div class="col-md-3">
                            <label for="credit_card_name" class="form-label">Credit card holder name</label>
                            <input type="text" class="form-control" id="credit_card_name" name="credit_card_name">
                        </div>

                        <div class="col-md-3">
                            <label for="credit_card_expire" class="form-label">Credit card expire date</label>
                            <input type="date" class="form-control" id="credit_card_expire" name="credit_card_expire">
                        </div>

                        <div class="col-md-3">
                            <label for="credit_card_monthly_income" class="form-label">Credit card monthly
                                income</label>
                            <input type="text" class="form-control" id="credit_card_monthly_income"
                                name="credit_card_monthly_income">
                        </div>
                        <input type="text" name="user_id" value="{{Auth::id()}}" hidden>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
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
