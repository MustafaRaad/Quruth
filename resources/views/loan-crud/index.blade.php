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
                    <div class="mt-2">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{$message}}
                        </div>
                        @endif
                    </div>
                    <div class="bg-light p-4 rounded">
                        <h1>Loans</h1>
                        <div class="lead">
                            Manage your loans.
                            <a href="{{route('loans.create')}}" class="btn btn-primary btn-sm float-right">Add new
                                loan</a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Loan type</th>
                                    <th scope="col">Credit card type</th>
                                    <th scope="col">Credit card name</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($loans as $loan)
                                <tr>
                                    <td>{{ $loan->f_name }} {{ $loan->l_name }}</td>
                                    <td>{{ $loan->loan_type }}</td>
                                    <td>{{ $loan->credit_card_type }}</td>
                                    <td>{{ $loan->credit_card_name }}</td>
                                    <td>{{ $loan->created_at }}</td>
                                    <td><a href="{{ route('loans.show', $loan->id) }}"
                                            class="btn btn-warning btn-sm">Show</a>
                                        <a href="{{ route('loans.edit', $loan->id) }}"
                                            class="btn btn-info btn-sm">Edit</a>
                                    </td>
                                    {{-- {!! Form::open(['method' => 'DELETE','route' => ['users.destroy',
                                    $user->id],'style'=>'display:inline']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!} --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <div class="d-flex">
                            {!! $loans->links() !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
