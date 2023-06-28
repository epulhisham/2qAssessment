@extends('layouts.main')
@section('container')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            @if (session()->has('success'))
            <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
            </div>
            @endif
            <a href="/mainpage/create" class="btn btn-dark mb-3">Add new company</a>

            @if (count($companies)>0)
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companies as $company)
                        <tr>
                            <td>{{ $companies->firstItem() + $loop->index }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}" class="company-logo mx-3">
                                {{ $company->name }}
                            </td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->website }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <button class="badge badge-size-5 bg-info mx-1 border-0" data-bs-toggle="modal" data-bs-target="#showCompanyModal{{ $company->id }}">
                                        <span data-feather="eye"></span>
                                    </button>
                                    @include('mainpage/show', ['company' => $company])
                                    
                                    <a href="/mainpage/{{ $company->id }}/edit" class="badge badge-size-5 bg-success mx-1">
                                        <span data-feather="edit"></span>
                                    </a>                                                     
                                    <button class="badge bg-danger border-0 mx-1" data-bs-toggle="modal" data-bs-target="#deleteCompanyModal{{ $company->id }}">
                                        <span data-feather="trash" class="align-text-bottom"></span>
                                    </button>
                                    @include('mainpage/delete', ['company' => $company])
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $companies->links() }}
            @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-center">No company found.</td>
                    </tr>
                </tbody>
            </table>
                
            @endif

        </div>
    </div>
</div>

@endsection