@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employees') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Fname</th>
                                        <th>Lname</th>
                                        <th>Mname</th>
                                        <th>Address</th>
                                        <th>DOB</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($employees ?? [] as $employee)
                                        <tr>
                                            <td>{{ $employee->Fname }}</td>
                                            <td>{{ $employee->Lname }}</td>
                                            <td>{{ $employee->Mname }}</td>
                                            <td>{{ $employee->Address }}</td>
                                            <td>{{ $employee->DOB }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No employees available.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
